<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            'datasets' => [
                [
                    'label' => 'Statistik Penduduk 2020',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'data' => [65, 59, 80, 81, 56, 55, 40, 71, 91, 54, 71, 48],
                ]
            ]
        ];

        $data2 = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            'datasets' => [
                [
                    'label' => 'Statistik KK 2020',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'data' => [65, 59, 80, 81, 56, 55, 40],
                ]
            ]
        ];

        return view('statistik.index', compact('data'));
    }
}
