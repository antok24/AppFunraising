@extends('layout.master')

@section('content')
            <section class="content-body">
					<header class="page-header">
						<h2>Tambah Data Barang</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Barang</span></li>
							</ol>
							<a class="sidebar-right-toggle"  data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
                    </header>
                    
					<!-- start: page -->					
					<div class="row">
						<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<a href="{{route('inventaris.index')}}" class="btn btn-success"><i class="fa fa-eye"></i> Lihat Data</a>	
									</header>
									@foreach($barang as $rows)
									<form method="post" action="{{url('inventaris/update')}}">
									{{csrf_field()}}
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Kode Barang <span class="required">*</span></label>
											<div class="col-sm-9">
												<input value="{{$rows->kode_barang}}" type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama Barang <span class="required">*</span></label>
											<div class="col-sm-9">
												<input value="{{$rows->nama_barang}}" type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Merk <span class="required">*</span></label>
											<div class="col-sm-9">
												<input value="{{$rows->merk_barang}}" type="text" name="merk_barang" class="form-control" placeholder="Merk" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Nilai Perolehan<span class="required">*</span></label>
											<div class="col-sm-9">
												<input value="{{$rows->nilai_perolehan}}" type="text" name="nilai_perolehan" class="form-control" placeholder="Nilai Perolehan" required/>
											</div>
										</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Tahun Perolehan</label>
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input value="{{$rows->tahun_perolehan}}" type="text" name="tahun_perolehan" data-plugin-datepicker class="form-control">
													</div>
												</div>
											</div>
											<input type="hidden" name="user_created" value="{{ 1 }}">
											<input type="hidden" name="user_updated" value="{{ 1 }}">
										</div>
										<div class="form-group">
											<footer class="panel-footer">
												<input type="submit" class="btn btn-success" value="Simpan Data">
											</footer>
										</div>
									</form>
									@endforeach
								</section>
						</div>
						
					</div>
					<!-- end: page -->
				</section>
@endsection