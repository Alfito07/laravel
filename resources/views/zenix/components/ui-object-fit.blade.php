@extends('layouts.default')

@section('content')
		<div class="content-body default-height">
            <!-- container starts -->
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Bootstrap</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0);">Object-Fit</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Contain</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-contain</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <img src="{{ asset('images/media/1.jpg') }} " class="object-fit-contain border rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Cover</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-cover</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <img src="{{ asset('images/media/1.jpg') }} " class="object-fit-cover border rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Fill</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-fill</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <img src="{{ asset('images/media/1.jpg') }} " class="object-fit-fill border rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Scale</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-scale</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <img src="{{ asset('images/media/1.jpg') }} " class="object-fit-scale border rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit None</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-none</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <img src="{{ asset('images/media/1.jpg') }} " class="object-fit-none border rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Conatin (Responsive - sm)</h4>
								<p class="m-0 subtitle">Use classe <code>.fit-sm-contain</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <img src="{{ asset('images/media/1.jpg') }} " class="object-fit-sm-contain border rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Conatin (Responsive - md)</h4>
								<p class="m-0 subtitle">Use classe <code>.fit-md-contain</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <img src="{{ asset('images/media/1.jpg') }} " class="object-fit-md-contain border rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Conatin (Responsive - lg)</h4>
								<p class="m-0 subtitle">Use classe <code>.fit-lg-contain</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <img src="{{ asset('images/media/1.jpg') }} " class="object-fit-lg-contain border rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Conatin (Responsive - xl)</h4>
								<p class="m-0 subtitle">Use classe <code>.fit-xl-contain</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <img src="{{ asset('images/media/1.jpg') }} " class="object-fit-xl-contain border rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Conatin (Responsive - XXl)</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-xxl-contain</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <img src="{{ asset('images/media/1.jpg') }} " class="object-fit-xxl-contain border rounded" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Contain Vidio</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-contain</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <video src="{{ asset('images/media/transaction.mp4') }}" class="object-fit-contain border rounded" autoplay loop muted></video>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Cover Vidio</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-cover</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <video src="{{ asset('images/media/transaction.mp4') }}" class="object-fit-cover border rounded" autoplay loop muted></video>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Fill Vidio</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-fill</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <video src="{{ asset('images/media/transaction.mp4') }}" class="object-fit-fill border rounded" autoplay loop muted></video>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit Scale Vidio</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-scale</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <video src="{{ asset('images/media/transaction.mp4') }}" class="object-fit-scale border rounded" autoplay loop muted></video>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Object Fit None Vidio</h4>
								<p class="m-0 subtitle">Use classe <code>.object-fit-none</code> for get desire heading.</p>
                            </div>
                            <div class="card-body object-fit-container">
                                <video src="{{ asset('images/media/transaction.mp4') }}" class="object-fit-none border rounded" autoplay loop muted></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- container ends -->
        </div>
@endsection