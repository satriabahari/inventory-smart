<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PolarAreaChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PolarAreaChart
    {
        return $this->chart->polarAreaChart()
            ->setTitle('Product Management')
            // ->setSubtitle('Season 2021.')
            ->addData([
                \app\Models\Product::count(),
                \app\Models\Category::count(),
                \app\Models\Customer::count(),
                \app\Models\Supplier::count(),
                \app\Models\Inbound::count(),
                \app\Models\Outbound::count(),
            ])
            ->setLabels(['Products', 'Categories', 'Customers', 'Suppliers', 'Inbounds', 'Outbounds']);
    }
}
