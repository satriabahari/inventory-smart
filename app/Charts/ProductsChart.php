<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ProductsChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart{
        return $this->chart->donutChart()
            ->setTitle('Top 3 scorers of the team.')
            ->setSubtitle('Season 2021.')
            ->addData([
                \app\Models\Product::count(),
                \app\Models\Customer::count(),
            ])
            ->setLabels(['Products', 'Customers']);
    }
}
