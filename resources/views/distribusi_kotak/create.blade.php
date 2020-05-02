@extends('layout.master')

@section('content')
            <section class="content-body">
					<header class="page-header">
						<h2>Tambah Data Distribusi Kotak</h2>
					
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

					<div class="row">
						<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<a href="{{route('distribusi-kotak.index')}}" class="btn btn-success"><i class="fa fa-eye"></i> Lihat Data</a>	
									</header>
									<form method="post" action="{{route('distribusi-kotak.store')}}">
									@csrf
									<div class="panel-body">
										<div class="form-group">
											<label class="col-md-3 control-label">Tanggal Distribusi</label>
											<div class="col-md-9">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</span>
													<input type="text" name="tanggal_distribusi" data-plugin-datepicker class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label">Tanggal Penarikan</label>
											<div class="col-md-9">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</span>
													<input type="text" name="tanggal_tarik" data-plugin-datepicker class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Karyawan <span class="required">*</span></label>
											<div class="col-sm-9">
											<select name="id_karyawan" data-plugin-selectTwo class="form-control populate" >
											@foreach ($karyawan as $data)
											<option value="{{ $data->id }}">{{ $data->nama_karyawan }} [{{ $data->email}}]</option>
											@endforeach
											</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Nama Toko <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="nama_toko" class="form-control" placeholder="Nama Toko" required/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Alamat <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="alamat" class="form-control" placeholder="Alamat" required/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Hp <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="hp" class="form-control" placeholder="Hp" required/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Kecamatan <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Kabupaten<span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" required/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Provinsi <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="provinsi" class="form-control" placeholder="Provinsi" required/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Penanda Lokasi <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="penanda_lokasi" class="form-control" placeholder="Penanda Lokasi" required/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Kode Kotak <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="kode_kotak" class="form-control" placeholder="Kode Kotak" required/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Status <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="status" class="form-control" placeholder="Status" required/>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Area <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="area" class="form-control" placeholder="Area" required/>
											</div>
										</div>

										<div class="form-group">
											<footer class="panel-footer">
												<input type="submit" class="btn btn-success" value="Simpan Data">
											</footer>
										</div>
									</div>
									</form>
								</section>
						</div>
						
					</div>
				</section>
@endsection