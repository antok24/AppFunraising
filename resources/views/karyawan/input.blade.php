@extends('layout.master')

@section('content')
            <section role="main" class="content-body">
					<header class="page-header">
						<h2>Tambah Data Karyawan</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Karyawan</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
                    </header>
                    
					<!-- start: page -->					
					<div class="row">
						<div class="col-md-12">
							<form id="form" action="" class="form-horizontal">
								<section class="panel">
									<header class="panel-heading">
										<a href="" class="btn btn-success"><i class="fa fa-eye"></i> Lihat Data</a>	
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama Karyawan <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="nama" class="form-control" placeholder="eg.: John Doe" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Umur <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="number" name="umur" class="form-control" placeholder="27" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Pendidikan Terakhir <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="pendidikan" class="form-control" placeholder="27" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">No Telepon <span class="required">*</span></label>
											<div class="col-sm-9">
												<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone"></i>
												</span>
												<input type="number" name="tlp" id="tlp" data-plugin-masked-input data-input-mask="+62 999-9999-9999" placeholder="+62 876 6789 8898" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Alamat Email <span class="required">*</span></label>
											<div class="col-sm-9">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-envelope"></i>
													</span>
													<input type="email" name="email" class="form-control" placeholder="eg.: email@email.com" required/>
												</div>
											</div>
											<div class="col-sm-9">

											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Alamat Lengkap <span class="required">*</span></label>
											<div class="col-sm-9">
												<textarea name="alamat" name="skills" rows="5" class="form-control" placeholder="Describe your skills" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama Pasangan</label>
											<div class="col-sm-9">
												<input name="pasangan" type="text" class="form-control" placeholder="" />
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