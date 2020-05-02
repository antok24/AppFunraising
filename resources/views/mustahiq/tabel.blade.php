@extends('layout.master')

@section('content')
        <section role="main" class="content-body">
					<header class="page-header">
						<h2>Data Mustahiq</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="{{route('mustahiq.index')}}">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Mustahiq </span></li>
								
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
							
						</div>
                    </header>
                    
					<!-- start: page -->
				<section class="panel">
					<header class="panel-heading">
					<a class="btn btn-primary" href="{{route('mustahiq.create')}}"><i class="fa fa-plus"></i> Tambah Data</a>
						
						
					</header>			
					<div class="panel-body">
						<div class="table-responsive">

								<table  class="table table-bordered table-striped table-condensed mb-none" id="example">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Mustahiq</th>
											<th>No Tlp</th>
											<th>Alamat</th>
											<th>Kabupaten</th>
											<th>Provinsi</th>
											<th>Ketrangan</th>
											<th></th>
										</tr>
									</thead>
									@php
            						$no = 1;    
       								@endphp
        
									<tbody>
									@foreach($data_mustahiq as $rows)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $rows->nama_mustahiq }}</td>
											<td>{{ $rows->no_tlp }}</td>
											<td>{{ $rows->alamat }}</td>
											<td>{{ $rows->kabupaten }}</td>
											<td>{{ $rows->provinsi }}</td>
											<td>{{ $rows->ket }}</td>
											<td class="actions">
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
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