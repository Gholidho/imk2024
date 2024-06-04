<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Data untuk jadwal layanan
        $services = [
            [
                'name' => 'Layanan A',
                'weekday' => 'Senin - Jumat: 09:00 - 17:00',
                'saturday' => 'Sabtu: 09:00 - 13:00'
            ],
            [
                'name' => 'Layanan B',
                'weekday' => 'Senin - Jumat: 10:00 - 18:00',
                'saturday' => 'Sabtu: 10:00 - 14:00'
            ],
            [
                'name' => 'Layanan C',
                'weekday' => 'Senin - Jumat: 08:00 - 16:00',
                'saturday' => 'Sabtu: 08:00 - 12:00'
            ]
        ];

        return view('services', compact('services'));
    }
}
