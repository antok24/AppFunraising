@extends('layout.master')

@section('content')
        <section role="main" class="content-body">
					<header class="page-header">
						<h2>Data Donatur</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="{{route('donatur.index')}}">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Donatur </span></li>
								
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
							
						</div>
                    </header>
                    
					<!-- start: page -->
				<section class="panel">
					<header class="panel-heading">
					<a class="btn btn-primary" href="{{route('donatur.create')}}"><i class="fa fa-plus"></i> Tambah Data</a>
						
						
					</header>			
					<div class="panel-body">
						<div class="table-responsive">

								<table  class="table table-bordered table-striped table-condensed mb-none" id="example">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Donatur</th>
											<th>Alamat</th>
											<th>No Tlp</th>
											<th>kecamatan</th>
											<th>Kabupaten</th>
											<th>Provinsi</th>
											<th>Action</th>
										</tr>
									</thead>
									@php
            						$no = 1;    
       								@endphp
        
									<tbody>
									@foreach($data_donatur as $rows)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $rows->nama_donatur }}</td>
											<td>{{ $rows->alamat }}</td>
											<td>{{ $rows->no_tlp }}</td>
											<td>{{ $rows->kecamatan}}</td>
											<td>{{ $rows->kabupaten }}</td>
											<td>{{ $rows->provinsi }}</td>
											<td class="actions">
												<a href="/donatur/edit/{{$rows->id_donatur}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="/donatur/delete/{{$rows->id_donatur}}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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