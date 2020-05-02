@extends('layout.master')

@section('content')
        <section role="main" class="content-body">
					<header class="page-header">
						<h2>Data Barang</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Barang </span></li>
								
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
							
						</div>
					</header>
                    
					<!-- start: page -->
				<section class="panel">
					<header class="panel-heading">
					<a class="btn btn-primary" href="{{route('inventaris.create')}}"><i class="fa fa-plus"></i> Tambah Data</a>
						<!-- <div class="col-md-3">
							<a class="btn btn-primary" href="{{route('karyawan.create')}}"><i class="fa fa-plus"></i> Tambah Data</a>
						</div>
						<div class="col-md-offset-9">
							<a href="#" class=" btn btn-danger btn-sm"><i class="fa fa-print"></i> Print</a>
							<a href="#" class=" btn btn-warning btn-sm"><i class="fa fa-file-pdf-o"></i> PDF</a>
							<a href="#" class=" btn btn-success btn-sm"><i class="fa fa-file-excel-o"></i> exel</a>
						</div> -->
						
					</header>			
					<div class="panel-body">
						<div class="table-responsive">

								<table  class="table table-bordered table-striped table-condensed mb-none" id="example">
									<thead>
										<tr>
											<th>No</th>
											<th>Kode Barang</th>
											<th>Nama Barang</h>
											<th>Merk</th>
											<th>Harga</th>
											<th>Tahun Perolehan</th>
											<th>Actions</th>
										</tr>
									</thead>
									@php
            						$no = 1;    
       								@endphp
        
									<tbody>
									@foreach($barang as $rows)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $rows->kode_barang }}</td>
											<td>{{ $rows->nama_barang }}</td>
											<td>{{ $rows->merk_barang }}</td>
											<td>{{ $rows->nilai_perolehan }}</td>
											<td>{{ $rows->tahun_perolehan }}</td>
											<td class="actions">
												
												
												<a href="/inventaris/edit/{{$rows->kode_barang}}" class="fa fa-pencil"></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</th>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					<!-- end: page -->
				</section>
		</section>
@endsection