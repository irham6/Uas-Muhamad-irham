@extends('layout.main')
@section('content')

<h1>Master data akun</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('jumum/tambah_proses') }}" method="POST">
@csrf
Nomor jurnal <input type="text" name="nomor_jurnal"><br>
kode jurnal <input type="text" name="kode_jurnal"><br>
keterangan  <input type="text" name="keterangan"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection