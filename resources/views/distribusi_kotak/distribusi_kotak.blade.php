@extends('layout.master')
@section('content')
        <section role="main" class="content-body">
				<header class="page-header">
					<h2>Data Distribusi Kotak</h2>
				
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Data</span></li>
							<li><span>Distribusi Kotak </span></li>
						</ol>
						<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						
					</div>
				</header>

				<section class="panel">
					<header class="panel-heading">
					<a class="btn btn-primary" href="{{route('distribusi-kotak.create')}}"><i class="fa fa-plus"></i> Tambah Data</a>
					</header>			
					<div class="panel-body">
						<div class="table-responsive">

								<table  class="table table-bordered table-striped table-condensed mb-none" id="example">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Toko</th>
											<th>Alamat</h>
											<th>Area</th>
											<th>Action</th>
										</tr>
									</thead>
									@php
            						$no = 1;    
       								@endphp
        
									<tbody>
									@foreach($data_kotak as $dk)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $dk->nama_toko }}</td>
											<td>{{ $dk->alamat }}</td>
											<td>{{ $dk->area }}</td>
											<td class="actions">
												<a href="/inventaris/edit/{{$dk->kode_barang}}" class="fa fa-pencil"></a>
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