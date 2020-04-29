@extends('layout.master')

@section('content')
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Form Tambah Data Barang</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Barang</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Default</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
                                        <a class="btn btn-primary" href="{{route('inventaris.create')}}"><i class="fa fa-plus"></i> Tambah Data</a> 
                                    </div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>No</th>
											<th>Kode Barang</th>
                                            <th>Nama Barang</th>
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
										<tr data-item-id="53">
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $rows->kode_barang }}</td>
                                            <td>{{ $rows->nama_barang }}</td>
                                            <td>{{ $rows->merk_barang }}</td>
                                            <td>{{ $rows->nilai_perolehan }}</td>
                                            <td>{{ $rows->tahun_perolehan }}</td>
											<td>Links</td>
											<td>Text only</td>
											<td class="actions">
												<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
												<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</td>
                                        </tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
                </section>
@endsection    
