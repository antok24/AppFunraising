@extends('layout.master')

@section('content')
                    <header class="page-header">
						<h2>Home</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>APP</span></li>
								<li><span>Funraising</span></li>
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
                    </header>
					
					<section role="main" class="content-body">
						<section class="panel">
						<img src="{{asset('assets/images/!logged-user.jpg')}}" width="100%">
						</section>
					</section>

@endsection