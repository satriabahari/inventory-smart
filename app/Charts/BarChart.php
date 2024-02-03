<?php

namespace App\Charts;

use App\Models\Inbound;
use App\Models\Outbound;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BarChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        // return $this->chart->barChart()
        //     ->setTitle('San Francisco vs Boston.')
        //     ->setSubtitle('Wins during season 2021.')
        //     ->addData('San Francisco', [6, 9, 3, 4, 10, 8])
        //     ->addData('Boston', [7, 3, 8, 2, 6, 4])
        //     ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

        $inboundData = Inbound::selectRaw('MONTH(date) as month, SUM(stock) as total_stock')
            ->groupBy('month')
            ->pluck('total_stock', 'month')
            ->toArray();

        // Group outbound data by month and sum the stock values
        $outboundData = Outbound::selectRaw('MONTH(date) as month, SUM(stock) as total_stock')
            ->groupBy('month')
            ->pluck('total_stock', 'month')
            ->toArray();

        $months = range(1, 12); // Assuming data spans all 12 months

        return $this->chart->barChart()
            ->setTitle('Stock Movement during 2024.')
            ->setSubtitle('Inbound vs Outbound stock.')
            ->addData('Inbound', array_values(array_replace(array_fill_keys($months, 0), $inboundData)))
            ->addData('Outbound', array_values(array_replace(array_fill_keys($months, 0), $outboundData)))
            // ->setXAxis($months)
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
    }
}
