@extends('utama')

@section('judul_menu')
    ini ditampilkan dari section judul menu, dengan data: {{ $isi_data }}

    @if ($isi_data < 12)
        <p>isi data kurang dari 12</p>
    @elseif($isi_data > 18)
        <p>isi data lebih dari 18</p>
    @endif
@endsection

@section('isi_menu')
    ini isi dari section isi menu
@endsection
