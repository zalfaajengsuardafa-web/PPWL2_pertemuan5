<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Jika pakai Query Builder

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')
            ->orderBy('judul', 'asc')
            ->get();

        return view('buku', compact('buku'));
    }

    public function create() {}
    public function store(Request $request) {}
    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}