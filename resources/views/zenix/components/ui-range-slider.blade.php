@extends('layouts.default')

@section('content')
       <div class="content-body default-height">
            <!-- container starts -->
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Bootstrap</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0);">Range Slider</a></li>
					</ol>
                </div>
                <div class="row"> 
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default Range Slider</h4>
                            </div>
                            <div class="card-body">
                                <label for="customRange1" class="form-label">Example range</label>
                                <input type="range" class="form-range" id="customRange1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Disabled  Range Slider</h4>
                            </div>
                            <div class="card-body">
                                <label for="disabledRange" class="form-label">Disabled range</label>
                                <input type="range" class="form-range" id="disabledRange" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Min and Max Range Slider</h4>
                            </div>
                            <div class="card-body">
                                <label for="customRange2" class="form-label">Example range</label>
                                <input type="range" class="form-range" min="0" max="5" id="customRange2">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Steps Range Slider</h4>
                            </div>
                            <div class="card-body">
                                <label for="customRange3" class="form-label">Example range</label>
                                <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container ends -->
        </div>
@endsection