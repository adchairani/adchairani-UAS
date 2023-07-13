@extends('layout.main')
@section('content')
<h1>Edit Data Jurnal Umum</h1>
<form action="{{ asset('jurnalumum/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $jurnalumum->id ?>">
Nomor Jurnal <input type="text" name="nomor_jurnal" value="<?php echo $jurnalumum->nomor_jurnal ?>"><br>
kode Jurnal <input type="text" name="kode_jurnal" value="<?php echo $jurnalumum->kode_jurnal ?>"><br>
Keterangan <input type="text" name="keterangan" value="<?php echo $jurnalumum->keterangan ?>"><br>
<input type="submit" value="Simpan">
</form>     
@endsection