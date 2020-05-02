@extends('layout.master')

@section('content')
            <section class="content-body">
					<header class="page-header">
						<h2>Tambah Data Donatur</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Donatur</span></li>
							</ol>
							<a class="sidebar-right-toggle"  data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
                    </header>
                    
					<!-- start: page -->					
					<div class="row">
						<div class="col-md-12">
							<form action="{{url('donatur/simpan')}}" method="POST" class="form-horizontal">
							@csrf
								<section class="panel">
									<header class="panel-heading">
										<a href="{{route('donatur.index')}}" class="btn btn-success"><i class="fa fa-eye"></i> Lihat Data</a>	
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama Donatur <span class="required">*</span></label>
											<div class="col-sm-6">
												<input type="text" name="nama" class="form-control" placeholder="eg.: John Doe" required/>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label">No Telepon <span class="required">*</span></label>
											<div class="col-sm-4">
												<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone"></i>
												</span>
												<input type="number" name="tlp" id="tlp" data-plugin-masked-input data-input-mask="0999-9999-9999" placeholder="0876 6789 8898" class="form-control">
												</div>
											</div>
										</div>

										
										<div class="form-group">
											<label class="col-sm-3 control-label">Alamat Lengkap <span class="required">*</span></label>
											<div class="col-sm-9">
												<textarea name="alamat" name="skills" rows="5" class="form-control" placeholder="Tuliskan Alamat lengkap disini" required></textarea>
											</div>
										</div>
										<!-- <div class="form-group">
											<label class="col-sm-3 control-label">Jenis</label>
											<div class="col-sm-2">
											<select name="jenis" data-plugin-selectTwo class="form-control populate" >
														<option value="infaq">Infaq</option>
														<option value="sedekah">Sedekah</option>
														<option value="hibah">Hibah</option>
														<option value="zakat">Zakat</option>
														<option value="lain-lain">dll</option>
													</select>
											</div>
										</div> -->
										<div class="form-group">
											<label class="col-sm-3 control-label">Kecamatan <span class="required">*</span></label>
											<div class="col-sm-4">
												<input type="text" name="kecamatan" class="form-control" placeholder="eg.: Tawangsari" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Kabupaten <span class="required">*</span></label>
											<div class="col-sm-4">
												<input type="text" name="kabupaten" class="form-control" placeholder="eg.: Sukoharjo" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Provinsi <span class="required">*</span></label>
											<div class="col-sm-4">
												<input type="text" name="provinsi" class="form-control" placeholder="eg.: Jawa Tengah" required/>
											</div>
										</div>
										
									</div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-9 col-sm-offset-3">
												<button class="btn btn-primary">Submit</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
									</footer>
								</section>
							</form>
						</div>
						
					</div>
					<!-- end: page -->
				</section>
@endsection