@extends('layout.master')

@section('content')
            <section role="main" class="content-body">
					<header class="page-header">
						<h2>Data Karyawan</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Karyawan </span></li>
								
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
							
						</div>
                    </header>
                    
					<!-- start: page -->
					
					<header class="panel-heading">
					<div class="col-md-3">
							<a class="btn btn-primary" href="{{route('karyawan.create')}}"><i class="fa fa-plus"></i> Tambah Data</a>
					</div>
							<div class="col-md-offset-9">
								<a href="#" class=" btn btn-danger btn-sm"><i class="fa fa-print"></i> Print</a>
								<a href="#" class=" btn btn-warning btn-sm"><i class="fa fa-file-pdf-o"></i> PDF</a>
								<a href="#" class=" btn btn-success btn-sm"><i class="fa fa-file-excel-o"></i> exel</a>
							</div>
						
					</header>				
					<div class="panel-body">
						
								<table  class="table table-bordered table-striped mb-none" id="example">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Karyawan</th>
											<th>No Tlp</th>
											<th>Pendidikan</th>
											<th>Umur</th>
											<th>Email</th>
											<th>Nama Pasangan</th>
											<th>Alamat</th>
											<th class="actions"></th>
										</tr>
									</thead>
									@php
            						$no = 1;    
       								@endphp
        
									<tbody>
									@foreach($data as $rows)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $rows->nama_karyawan }}</td>
											<td>{{ $rows->no_hp }}</td>
											<td>{{ $rows->pendidikan_terakhir }}</td>
											<td>{{ $rows->umur }}</td>
											<td>{{ $rows->email }}</td>
											<td>{{ $rows->nama_pasangan }}</td>
											<td>{{ $rows->alamat }}</td>
											<td class="actions">
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</th>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
					<!-- end: page -->
				</section>
@endsection