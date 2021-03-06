@extends('layout.master')

@section('content')
            <section class="content-body">
					<header class="page-header">
						<h2>Transaksi Donasi</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="/">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Donasi</span></li>
							</ol>
							<a class="sidebar-right-toggle"  data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
                    </header>
                    
					<!-- start: page -->					
					<div class="row">
						<div class="col-md-12">
							<form action="{{url('donasi/simpan')}}" method="POST" class="form-horizontal">
							@csrf
								<section class="panel">
									<header class="panel-heading">
										<a href="{{route('donasi.index')}}" class="btn btn-success"><i class="fa fa-eye"></i> Lihat Data</a>	
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Donatur <span class="required">*</span></label>
											<div class="col-sm-6">
                                                <select name="id_karyawan" data-plugin-selectTwo class="form-control populate" >
                                                    @foreach ($data_donatur as $data)
                                                    <option value="{{ $data->id_donatur }}">{{ $data->nama_donatur }} [ {{ $data->kecamatan}}, {{ $data->kabupaten}}, {{ $data->provinsi}} ]</option>
                                                    @endforeach
                                                </select>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-sm-3 control-label">Jumlah Uang <span class="required">*</span></label>
											<div class="col-sm-3">
												<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-money"></i>
												</span>
												<input type="number" name="jumlah"   placeholder="250000" class="form-control">
												</div>
											</div>
										</div>
                                        <div class="form-group">
											<label class="col-sm-3 control-label">Tanggal Transaksi <span class="required">*</span></label>
											<div class="col-sm-6">
												<input type="date" value="" name="tgl" class="form-control" required/>
											</div>
										</div>

										
										<div class="form-group">
											<label class="col-sm-3 control-label">Keterangan <span class="required">*</span></label>
											<div class="col-sm-9">
												<textarea name="keterangan"  rows="5" class="form-control"  required></textarea>
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