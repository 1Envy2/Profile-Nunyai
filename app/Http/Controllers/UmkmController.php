<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index(Request $request)
    {
        // Gunakan Eager Loading (with) untuk mengambil relasi foto dan link
        $query = Umkm::with(['photos', 'links']);

        // Filter kategori jika ada
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        $umkms = $query->get();
        
        // Ambil kategori unik untuk filter di halaman index
        $categories = Umkm::select('category')->distinct()->pluck('category');

        return view('umkm.index', compact('umkms', 'categories'));
    }
}