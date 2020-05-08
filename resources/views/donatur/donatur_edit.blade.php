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
								<section class="panel">
									<header class="panel-heading">
										<a href="{{route('donatur.index')}}" class="btn btn-success"><i class="fa fa-eye"></i> Lihat Data</a>	
                                    </header>
                                    @foreach($donatur as $rows)
									<form method="post" action="{{url('donatur/update')}}">
									{{csrf_field()}}
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama Donatur <span class="required">*</span></label>
											<div class="col-sm-6">
												<input value="{{$rows->nama_donatur}}" type="text" name="nama_donatur" class="form-control" placeholder="eg.: John Doe" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Alamat Lengkap <span class="required">*</span></label>
											<div class="col-sm-9">
												<textarea  name="alamat" name="skills" rows="5" class="form-control" placeholder="Tuliskan Alamat lengkap disini" required>{{$rows->alamat}}</textarea>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label">No Telepon <span class="required">*</span></label>
											<div class="col-sm-4">
												<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone"></i>
												</span>
												<input value="{{$rows->no_tlp}}" type="number" name="no_tlp" id="no_tlp" data-plugin-masked-input data-input-mask="0999-9999-9999" placeholder="0876 6789 8898" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Kecamatan <span class="required">*</span></label>
											<div class="col-sm-4">
												<input value="{{$rows->kecamatan}}" type="text" name="kecamatan" class="form-control" placeholder="eg.: Tawangsari" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Kabupaten <span class="required">*</span></label>
											<div class="col-sm-4">
												<input value="{{$rows->kabupaten}}" type="text" name="kabupaten" class="form-control" placeholder="eg.: Sukoharjo" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Provinsi <span class="required">*</span></label>
											<div class="col-sm-4">
												<input value="{{$rows->provinsi}}" type="text" name="provinsi" class="form-control" placeholder="eg.: Jawa Tengah" required/>
											</div>
										</div>
										
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