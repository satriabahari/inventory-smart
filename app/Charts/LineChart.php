<?php

namespace App\Charts;

use App\Models\Inbound;
use App\Models\Outbound;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class LineChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $inboundData = Inbound::selectRaw('MONTH(date) as month, SUM(stock) as total_stock')
            ->groupBy('month')
            ->pluck('total_stock', 'month')
            ->toArray();

        $outboundData = Outbound::selectRaw('MONTH(date) as month, SUM(stock) as total_stock')
            ->groupBy('month')
            ->pluck('total_stock', 'month')
            ->toArray();

        $months = range(1, 12); 

        return $this->chart->lineChart()
            ->setTitle('Stock Movement during 2024.')
            ->setSubtitle('Inbound vs Outbound stock.')
            ->addData('Inbound', array_values(array_replace(array_fill_keys($months, 0), $inboundData)))
            ->addData('Outbound', array_values(array_replace(array_fill_keys($months, 0), $outboundData)))
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
    }
}
