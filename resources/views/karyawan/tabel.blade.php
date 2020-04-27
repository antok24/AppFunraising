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
					<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Karyawan</th>
											<th>No Tlp</th>
											<th>Pendidikan</th>
											<th>Umur</th>
											<th>Email</th>
											<th>Nama Pasangan</th>
											<th>Alamat</th>
											<th class="actions"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Fauzi Ikhsan</td>
											<td>+62 9098 9998 8988</td>
											<td>S1</td>
											<td>25</td>
											<td>example@gmail.com</td>
											<td>Rizkike</td>
											<td>Bogor, Jawa Barat</td>
											<td class="actions">
												<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
												<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
											</th>
										</tr>
										
									</tbody>
								</table>
							</div>
					<!-- end: page -->
				</section>
@endsection