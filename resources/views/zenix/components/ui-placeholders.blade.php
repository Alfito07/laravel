@extends('layouts.default')

@section('content')
			<div class="content-body placeholder-demo">
				<div class="container-fluid">
					<div class="row page-titles">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active"><a href="javascript:void(0);">Bootstrap</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0);">Placeholder</a></li>
						</ol>
					</div>
					<!-- row -->
					<div class="row">
						<div class="col-lg-6">
							<div class="card">
								<img src="{{ asset('images/Screenshot_1.png') }} " class="card-img-top" alt="...">

								<div class="card-body">
								  <h5 class="card-title">Card title</h5>
								  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. This text is designed to provide a brief description or overview that complements the title.</p>
								  <a href="javascript:void(0);" class="btn btn-primary">Go somewhere</a>
								</div>
							  </div>
						</div>
						<div class="col-lg-6">
							<div class="card" aria-hidden="true">
								<img src="{{ asset('images/Screenshot_2.png') }} " class="card-img-top" alt="...">
								<div class="card-body">
								  <h5 class="card-title placeholder-glow">
									<span class="placeholder col-6"></span>
								  </h5>
								  <p class="card-text placeholder-glow">
									<span class="placeholder col-7"></span>
									<span class="placeholder col-4"></span>
									<span class="placeholder col-4"></span>
									<span class="placeholder col-6"></span>
									<span class="placeholder col-8"></span>
								  </p>
								  <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card">
								<div class="card-header d-block">
									<h4 class="card-title">Width Placeholder</h4>
									<p class="mb-0 subtitle"></p>
								</div>
								<div class="card-body">
								   <span class="placeholder col-6"></span>
									<span class="placeholder w-75"></span>
									<span class="placeholder" style="width: 25%;"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card">
								<div class="card-header d-block">
									<h4 class="card-title">Sizing Placeholder</h4>
									<p class="mb-0 subtitle"></p>
								</div>
								<div class="card-body">
									<span class="placeholder col-12 placeholder-lg"></span>
									<span class="placeholder col-12"></span>
									<span class="placeholder col-12 placeholder-sm"></span>
									<span class="placeholder col-12 placeholder-xs"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card">
								<div class="card-header d-block">
									<h4 class="card-title">Animation Placeholder</h4>
									<p class="mb-0 subtitle"></p>
								</div>
								<div class="card-body">
								   <p class="placeholder-glow">
									  <span class="placeholder col-12"></span>
									</p>

									<p class="placeholder-wave">
									  <span class="placeholder col-12"></span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header d-block">
									<h4 class="card-title">Color Placeholder</h4>
									<p class="mb-0 subtitle"></p>
								</div>
								<div class="card-body">
									<span class="placeholder col-12"></span>
									<span class="placeholder col-12 bg-primary"></span>
									<span class="placeholder col-12 bg-secondary"></span>
									<span class="placeholder col-12 bg-success"></span>
									<span class="placeholder col-12 bg-danger"></span>
									<span class="placeholder col-12 bg-warning"></span>
									<span class="placeholder col-12 bg-info"></span>
									<span class="placeholder col-12 bg-light"></span>
									<span class="placeholder col-12 bg-dark"></span>
								</div>
							</div>
						</div>
					</div>
					   
				</div>
			</div>
@endsection