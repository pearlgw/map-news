<?php

namespace App\Http\Controllers;

use App\Models\NewsLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsLocationController extends Controller
{
    public function index()
    {
        return view('mapnews.index', [
            'news' => NewsLocation::all(),
            // 'news' => []
        ]);
    }

    function getCoordinatesFromAddress($address)
    {
        $response = Http::get('https://nominatim.openstreetmap.org/search', [
            'q' => $address,
            'format' => 'json',
            'limit' => 1,
        ]);

        $data = $response->json();

        if (!empty($data)) {
            return [
                'latitude' => $data[0]['lat'],
                'longitude' => $data[0]['lon'],
            ];
        }

        return null; // Jika gagal
    }

    public function search(Request $request)
    {
        // Mengambil inputan dari form
        $url = $request->input('urlnews'); // Pastikan ini adalah alamat yang valid
        $file = $request->file('file');

        $alamat = 'Tuban';
        // $alamat = 'Kabupaten Ciamis';
        // $alamat = 'Jakarta';

        $coordinates = $this->getCoordinatesFromAddress($alamat);

        if ($coordinates) {
            // Menyimpan data ke dalam tabel 'news_locations'
            NewsLocation::create([
                'time' => now(),
                'casualities' => '0', // Default atau sesuai inputan
                'supplies' => 'Basic supplies', // Default atau sesuai inputan
                'disaster' => 'Flood', // Default atau sesuai inputan
                'organization' => 'Red Cross', // Default atau sesuai inputan
                'scale' => 'Medium', // Default atau sesuai inputan
                'person' => 'John Doe', // Default atau sesuai inputan
                'city' => 'Semarang', // Sesuaikan dengan kota yang diparse
                'latitude' => $coordinates['latitude'],
                'longitude' => $coordinates['longitude']
            ]);

            // Setelah create, lakukan query data sesuai kota
            $news = [];
            // $news = NewsLocation::all();
            if ($url) {
                $news = NewsLocation::where('city', 'Semarang')->get();
            } elseif ($file && strpos($file->getClientOriginalExtension(), 'pdf') !== false) {
                $news = NewsLocation::where('city', 'Surabaya')->get();
            }

            // Return view dengan data news
            return view('mapnews.index', compact('news'));
        } else {
            return redirect()->back()->withErrors(['error' => 'Koordinat tidak ditemukan']);
        }
    }
}