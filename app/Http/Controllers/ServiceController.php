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
                'name' => 'Anticidro',
                'weekday' => 'Senin - Jumat: 09:00 - 17:00',
                'saturday' => 'Sabtu: 09:00 - 13:00'
            ],
            [
                'name' => 'Jempol Keren',
                'weekday' => 'Senin - Jumat: 10:00 - 18:00',
                'saturday' => 'Sabtu: 10:00 - 14:00'
            ],
            [
                'name' => 'Paling Oke',
                'weekday' => 'Senin - Jumat: 08:00 - 16:00',
                'saturday' => 'Sabtu: 08:00 - 12:00'
            ],
            [
                'name' => 'Pelita Mahir',
                'weekday' => 'Senin - Jumat: 08:00 - 16:00',
                'saturday' => 'Sabtu: 08:00 - 12:00'
            ]
        ];

        return view('layanan.index', compact('services'));
    }
}
