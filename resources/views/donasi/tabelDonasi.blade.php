@extends('layout.master')

@section('content')
        <section role="main" class="content-body">
					<header class="page-header">
						<h2>Data Transaksi Donasi</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="{{route('donasi.index')}}">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Transaksi Donasi </span></li>
								
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
							
						</div>
                    </header>
                    
					<!-- start: page -->
				<section class="panel">
					<header class="panel-heading">
					<a class="btn btn-primary" href="{{route('donasi.create')}}"><i class="fa fa-plus"></i> Tambah Data</a>
						
						
					</header>			
					<div class="panel-body">
						<div class="table-responsive">

								<table  class="table table-bordered table-striped table-condensed mb-none" id="example">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Donatur</th>
											<th>Jenis Donasi</th>
											<th>Jumlah</th>
											<th>Waktu Transaksi</th>
											<th>Deskripsi</th>
											<th></th>
										</tr>
									</thead>
									@php
            						$no = 1;    
       								@endphp
        
									<tbody>
									@foreach($dataDonasi as $rows)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $rows->donatur }}</td>
											<td>
                                                @if ($rows->jenis == "infaq")
                                                    <span class='label label-info'> {{$rows->jenis}} </span>
                                                @elseif ($rows->jenis == "sedekah")
                                                    <span class='label label-success'> {{$rows->jenis}} </span>
                                                @elseif($rows->jenis == "hibah")
                                                    <span class='label label-warning'> {{$rows->jenis}} </span>
                                                @elseif($rows->jenis == "zakat")
                                                    <span class='label label-danger'> {{$rows->jenis}} </span>
                                                @elseif($rows->jenis == "lain-lain")
                                                    <span class='label label-primary'> {{$rows->jenis}} </span>
                                                @endif
                                            </td>
											<td>@currency($rows->jumlah)</td>
											<td>{{date('j F Y', strtotime($rows->tgl_transaksi))}}</td>
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