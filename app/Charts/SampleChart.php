<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\PemesananHotel;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $penjualan = PemesananHotel::get();

        $chart = Chartisan::build()
            ->labels(['Total Pesanan Kamar'])
            ->dataset('penjualan', [$penjualan->groupBy('id')->count('id')]);

        return $chart;
    }
}