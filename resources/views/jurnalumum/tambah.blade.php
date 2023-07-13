@extends('layout.main')
@section('content')

<h1>Tambah Jurnal Umum</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Jurnal Umum</h1>
<form action="{{ asset('jurnalumum/tambah_proses') }}" method="POST">
@csrf
Nomor Jurnal <input type="text" name="nomor_jurnal"><br>
Kode Jurnal <input type="text" name="kode_jurnal"><br>
Keterangan <input type="text" name="keterangan"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection