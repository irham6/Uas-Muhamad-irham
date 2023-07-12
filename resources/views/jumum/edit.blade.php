@extends('layout.main')
@section('content')
<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('jumum/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $jumum->id ?>">
nomor_jurnal <input type="text" name="nomor_jurnal" value="<?php echo $jumum->nomor_jurnal ?>"><br>
kode_jurnal <input type="text" name="kode_jurnal" value="<?php echo $jumum->kode_jurnal ?>"><br>
keterangan <input type="text" name="keterangan" value="<?php echo $jumum->keterangan ?>"><br>
<input type="submit" value="Simpan">
</form>     
@endsection