@extends('layout.master')

@section('content')
        <section role="main" class="content-body">
					<header class="page-header">
						<h2>Laporan Donasi</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="{{route('donasi_kotak.index')}}">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Laporan Donasi </span></li>
								
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
							
						</div>
					</header>
				<div class="row">
					<div class="col-lg-12">
						<section class="panel">
							<div class="panel-body bg-quaternary text-center">
								<p style="font-size:25px"> Laporan Donasi</p>
							</div>
						</section>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<section class="panel">
							<div class="panel-body bg-info">
								<div class="form-group">
									<form action="{{ route('laporan-donasi.search') }}" method="POST" role="cari">
										<label for="" class="col-md-3 control-label"><p style="font-size: 14px">Cari Data Berdasarkan Tanggal</p></label>
										<div class="col-md-6">
											<div class="input-daterange input-group" data-plugin-datepicker>
												<span class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</span>
												<input type="text" class="form-control" name="start">
												<span class="input-group-addon">sampai</span>
												<input type="text" class="form-control" name="end">
											</div>
										</div>
										<button type="submit" class="btn btn-success">Search</button>
									</form>
								</div>
							</div>
						</section>
					</div>
				</div>
                    
					<!-- start: page -->
				@if(isset($lapdonasi))
				<section class="panel">
					<header class="panel-heading bg-quaternary">
                        
					</header>			
					<div class="panel-body">
						<div class="table-responsive">

								<table  class="table table-bordered table-striped table-condensed mb-none" id="example">
									<thead>
										<tr>
											<th>#</th>
											<th>Jenis</th>
											<th>Donator</th>
											<th>Jumlah</th>
											<th>Tanggal</th>
										</tr>
									</thead>
									@php
            						$no = 1;    
       								@endphp
        
									<tbody>
									@foreach($lapdonasi as $rows)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $rows->jenis }}</td>
											<td>{{ $rows->donatur }}</td>
											<td>@currency($rows->jumlah)</td>
											<td>{{date('j F Y', strtotime($rows->tgl_transaksi))}}</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
				</section>
				@elseif(isset($message))
					<p>{{ $message }}</p>
			  	@endif				
		</section>
@endsection