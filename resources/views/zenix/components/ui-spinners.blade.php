@extends('layouts.default')

@section('content')
		<div class="content-body spinner-demo">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0);">Bootstrap</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0);">Spinner</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row"> 
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default Spinner</h4>
                            </div>
                            <div class="card-body">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Growing Spinner</h4>
                            </div>
                            <div class="card-body">
                                <div class="spinner-grow" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Colorfull Spinners</h4>
                            </div>
                            <div class="card-body">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-border text-secondary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-border text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-border text-danger" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-border text-warning" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-border text-info" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-border text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-border text-dark" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Colorfull Growing Spinners</h4>
                            </div>
                            <div class="card-body">
                                <div class="spinner-grow text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-grow text-secondary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-grow text-success" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-grow text-danger" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-grow text-warning" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-grow text-info" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-grow text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                  <div class="spinner-grow text-dark" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Alighment Flex</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div class="spinner-border" role="status">
                                      <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <strong role="status">Loading...</strong>
                                    <div class="spinner-border ms-auto" aria-hidden="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Spinner Sizes</h4>
                            </div>
                            <div class="card-body d-flex flex-wrap align-items-center">
                                <div class="spinner-border me-4 spinner-border-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div class="spinner-grow me-4 spinner-grow-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div class="spinner-border me-4" style="width: 3rem; height: 3rem;" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <div class="spinner-grow me-4" style="width: 3rem; height: 3rem;" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Buttons Spinner</h4>
                            </div>
                            <div class="card-body d-flex flex-wrap align-items-center">
                                <button class="btn btn-primary mb-2 me-2" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                    <span class="visually-hidden" role="status">Loading...</span>
                                </button>
                                <button class="btn btn-primary mb-2 me-2" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                    <span role="status">Loading...</span>
                                </button>
                                <button class="btn btn-primary mb-2 me-2" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                    <span class="visually-hidden" role="status">Loading...</span>
                                </button>
                                <button class="btn btn-primary mb-2 me-2" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                    <span role="status">Loading...</span>
                                </button>
                                <button class="btn btn-secondary mb-2 me-2" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                    <span role="status">Loading...</span>
                                </button>
                                <button class="btn btn-success mb-2 me-2" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                    <span role="status">Loading...</span>
                                </button>
                                <button class="btn btn-danger mb-2 me-2" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                    <span role="status">Loading...</span>
                                </button>
                                <button class="btn btn-warning mb-2 me-2" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                    <span role="status">Loading...</span>
                                </button>
                                <button class="btn btn-info mb-2 me-2" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                    <span role="status">Loading...</span>
                                </button>
                                <button class="btn btn-dark mb-2 me-2" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                    <span role="status">Loading...</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
@endsection