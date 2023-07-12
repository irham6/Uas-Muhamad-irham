@extends('layout.main')
@section('content')

<h1>Master Transaksi</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('jumum/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>Nomor Jurnal</td>
    <td>Kode Jurnal</td>
    <td>Keterangan</td>
   
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($jumum as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->nomor_jurnal }}</td>
    <td>{{ $rows->kode_jurnal }}</td>
    <td>{{ $rows->keterangan }}</td>
   
    
    <td>
        <a href="{{ asset('jumum/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('jumum/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection