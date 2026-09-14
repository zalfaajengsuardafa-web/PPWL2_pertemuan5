@extends('layouts.app')

@section('content')
    <h2>Daftar Buku</h2>
    <table border="1" cellpadding="6">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
        </tr>
        @foreach ($buku as $item)
        <tr>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->penulis }}</td>
            <td>{{ $item->tahun_terbit }}</td>
            <td>{{ $item->stok }}</td>
        </tr>
        @endforeach
    </table>
@endsection