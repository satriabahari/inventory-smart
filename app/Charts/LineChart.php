<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class LineChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $inboundDates = \app\Models\Inbound::pluck('date')->map(function ($date) {
            return Carbon::parse($date)->format('Y-m-d');
        })->toArray();

        $outboundDates = \app\Models\Outbound::pluck('date')->map(function ($date) {
            return Carbon::parse($date)->format('Y-m-d');
        })->toArray();

        return $this->chart->lineChart()
            // ->setTitle('Inbounds vs Outbounds')
            // ->setSubtitle('Physical sales vs Digital sales.')
            // ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
            // ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
            // ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June'])
            // ->addData('Inbounds', [\app\Models\Inbound::all()])
            // ->addData('Outbounds', [\app\Models\Outbound::all()]);
            ->setTitle('Inbounds vs Outbounds')
            ->setXAxis($inboundDates)
            ->addData('Inbounds', $inboundDates)
            ->addData('Outbounds', $outboundDates);

        // ->setLabels(['Products', 'Categories', 'Customers', 'Suppliers', 'Inbounds', 'Outbounds']);
    }
}
