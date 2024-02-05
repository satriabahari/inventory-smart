<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DonutChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
            ->setTitle('Product Management')
            ->addData([
                \app\Models\Product::count(),
                \app\Models\Category::count(),
                \app\Models\Customer::count(),
                \app\Models\Supplier::count(),
            ])
            ->setLabels(['Products', 'Categories', 'Customers', 'Suppliers']);
    }
}
