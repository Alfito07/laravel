@extends('layouts.default')

@section('content')
       <div class="content-body default-height">
            <!-- container starts -->
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Bootstrap</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0);">Colors</a></li>
					</ol>
                </div>
				<div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Solid Background Colors</h4>
                            </div>
                            <div class="card-body">
                                <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
                                <div class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">.bg-primary-subtle</div>
                                <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
                                <div class="p-3 mb-2 bg-secondary-subtle text-secondary-emphasis">.bg-secondary-subtle</div>
                                <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
                                <div class="p-3 mb-2 bg-success-subtle text-success-emphasis">.bg-success-subtle</div>
                                <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
                                <div class="p-3 mb-2 bg-danger-subtle text-danger-emphasis">.bg-danger-subtle</div>
                                <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
                                <div class="p-3 mb-2 bg-warning-subtle text-warning-emphasis">.bg-warning-subtle</div>
                                <div class="p-3 mb-2 bg-info text-dark">.bg-info</div>
                                <div class="p-3 mb-2 bg-info-subtle text-info-emphasis">.bg-info-subtle</div>
                                <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
                                <div class="p-3 mb-2 bg-light-subtle text-light-emphasis">.bg-light-subtle</div>
                                <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
                                <div class="p-3 mb-2 bg-dark-subtle text-dark-emphasis">.bg-dark-subtle</div>
                                <div class="p-3 mb-2 bg-body-secondary">.bg-body-secondary</div>
                                <div class="p-3 mb-2 bg-body-tertiary">.bg-body-tertiary</div>
                                <div class="p-3 mb-2 bg-body text-body">.bg-body</div>
                                <div class="p-3 mb-2 bg-black text-white">.bg-black</div>
                                <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
                                <div class="p-3 mb-2 bg-transparent text-body">.bg-transparent</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Background Gradient</h4>
                            </div>
                            <div class="card-body">
                                <div class="p-3 mb-2 bg-gradient bg-primary text-white">.bg-primary bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-primary-subtle text-primary-emphasis">.bg-primary-subtle bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-secondary text-white">.bg-secondary bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-secondary-subtle text-secondary-emphasis">.bg-secondary-subtle bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-success text-white">.bg-success bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-success-subtle text-success-emphasis">.bg-success-subtle bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-danger text-white">.bg-danger bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-danger-subtle text-danger-emphasis">.bg-danger-subtle bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-warning text-dark">.bg-warning bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-warning-subtle text-warning-emphasis">.bg-warning-subtle bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-info text-dark">.bg-info bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-info-subtle text-info-emphasis">.bg-info-subtle bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-light text-dark">.bg-light bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-light-subtle text-light-emphasis">.bg-light-subtle bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-dark text-white">.bg-dark bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-dark-subtle text-dark-emphasis">.bg-dark-subtle bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-body-secondary">.bg-body-secondary bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-body-tertiary">.bg-body-tertiary bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-body text-body">.bg-body bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-black text-white">.bg-black bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-white text-dark">.bg-white bg-gradient</div>
                                <div class="p-3 mb-2 bg-gradient bg-transparent text-body">.bg-transparent bg-gradient</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Background Opacity</h4>
                            </div>
                            <div class="card-body">
                                <div class="bg-success p-2 text-white">This is default success background</div>
                                <div class="bg-success p-2 text-white bg-opacity-75">This is 75% opacity success background</div>
                                <div class="bg-success p-2 text-dark bg-opacity-50">This is 50% opacity success background</div>
                                <div class="bg-success p-2 text-dark bg-opacity-25">This is 25% opacity success background</div>
                                <div class="bg-success p-2 text-dark bg-opacity-10">This is 10% opacity success background</div>
                            </div>
                        </div>
                    </div>
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Other Colors</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-blue-100 text-white">.bs-blue-100</div>
										<div class="p-3 mb-2 bs-blue-200 text-white">.bs-blue-200</div>
										<div class="p-3 mb-2 bs-blue-300 text-white">.bs-blue-300</div>
										<div class="p-3 mb-2 bs-blue-400 text-white">.bs-blue-400</div>
										<div class="p-3 mb-2 bs-blue-500 text-white">.bs-blue-500</div>
										<div class="p-3 mb-2 bs-blue-600 text-white">.bs-blue-600</div>
										<div class="p-3 mb-2 bs-blue-700 text-white">.bs-blue-700</div>
										<div class="p-3 mb-2 bs-blue-800 text-white">.bs-blue-800</div>
										<div class="p-3 mb-2 bs-blue-900 text-white">.bs-blue-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-indigo-100 text-white">.bs-indigo-100</div>
										<div class="p-3 mb-2 bs-indigo-200 text-white">.bs-indigo-200</div>
										<div class="p-3 mb-2 bs-indigo-300 text-white">.bs-indigo-300</div>
										<div class="p-3 mb-2 bs-indigo-400 text-white">.bs-indigo-400</div>
										<div class="p-3 mb-2 bs-indigo-500 text-white">.bs-indigo-500</div>
										<div class="p-3 mb-2 bs-indigo-600 text-white">.bs-indigo-600</div>
										<div class="p-3 mb-2 bs-indigo-700 text-white">.bs-indigo-700</div>
										<div class="p-3 mb-2 bs-indigo-800 text-white">.bs-indigo-800</div>
										<div class="p-3 mb-2 bs-indigo-900 text-white">.bs-indigo-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-purple-100 text-white">.bs-purple-100</div>
										<div class="p-3 mb-2 bs-purple-200 text-white">.bs-purple-200</div>
										<div class="p-3 mb-2 bs-purple-300 text-white">.bs-purple-300</div>
										<div class="p-3 mb-2 bs-purple-400 text-white">.bs-purple-400</div>
										<div class="p-3 mb-2 bs-purple-500 text-white">.bs-purple-500</div>
										<div class="p-3 mb-2 bs-purple-600 text-white">.bs-purple-600</div>
										<div class="p-3 mb-2 bs-purple-700 text-white">.bs-purple-700</div>
										<div class="p-3 mb-2 bs-purple-800 text-white">.bs-purple-800</div>
										<div class="p-3 mb-2 bs-purple-900 text-white">.bs-purple-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-pink-100 text-white">.bs-pink-100</div>
										<div class="p-3 mb-2 bs-pink-200 text-white">.bs-pink-200</div>
										<div class="p-3 mb-2 bs-pink-300 text-white">.bs-pink-300</div>
										<div class="p-3 mb-2 bs-pink-400 text-white">.bs-pink-400</div>
										<div class="p-3 mb-2 bs-pink-500 text-white">.bs-pink-500</div>
										<div class="p-3 mb-2 bs-pink-600 text-white">.bs-pink-600</div>
										<div class="p-3 mb-2 bs-pink-700 text-white">.bs-pink-700</div>
										<div class="p-3 mb-2 bs-pink-800 text-white">.bs-pink-800</div>
										<div class="p-3 mb-2 bs-pink-900 text-white">.bs-pink-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-red-100 text-white">.bs-red-100</div>
										<div class="p-3 mb-2 bs-red-200 text-white">.bs-red-200</div>
										<div class="p-3 mb-2 bs-red-300 text-white">.bs-red-300</div>
										<div class="p-3 mb-2 bs-red-400 text-white">.bs-red-400</div>
										<div class="p-3 mb-2 bs-red-500 text-white">.bs-red-500</div>
										<div class="p-3 mb-2 bs-red-600 text-white">.bs-red-600</div>
										<div class="p-3 mb-2 bs-red-700 text-white">.bs-red-700</div>
										<div class="p-3 mb-2 bs-red-800 text-white">.bs-red-800</div>
										<div class="p-3 mb-2 bs-red-900 text-white">.bs-red-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-orange-100 text-white">.bs-orange-100</div>
										<div class="p-3 mb-2 bs-orange-200 text-white">.bs-orange-200</div>
										<div class="p-3 mb-2 bs-orange-300 text-white">.bs-orange-300</div>
										<div class="p-3 mb-2 bs-orange-400 text-white">.bs-orange-400</div>
										<div class="p-3 mb-2 bs-orange-500 text-white">.bs-orange-500</div>
										<div class="p-3 mb-2 bs-orange-600 text-white">.bs-orange-600</div>
										<div class="p-3 mb-2 bs-orange-700 text-white">.bs-orange-700</div>
										<div class="p-3 mb-2 bs-orange-800 text-white">.bs-orange-800</div>
										<div class="p-3 mb-2 bs-orange-900 text-white">.bs-orange-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-yellow-100 text-white">.bs-yellow-100</div>
										<div class="p-3 mb-2 bs-yellow-200 text-white">.bs-yellow-200</div>
										<div class="p-3 mb-2 bs-yellow-300 text-white">.bs-yellow-300</div>
										<div class="p-3 mb-2 bs-yellow-400 text-white">.bs-yellow-400</div>
										<div class="p-3 mb-2 bs-yellow-500 text-white">.bs-yellow-500</div>
										<div class="p-3 mb-2 bs-yellow-600 text-white">.bs-yellow-600</div>
										<div class="p-3 mb-2 bs-yellow-700 text-white">.bs-yellow-700</div>
										<div class="p-3 mb-2 bs-yellow-800 text-white">.bs-yellow-800</div>
										<div class="p-3 mb-2 bs-yellow-900 text-white">.bs-yellow-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-green-100 text-white">.bs-green-100</div>
										<div class="p-3 mb-2 bs-green-200 text-white">.bs-green-200</div>
										<div class="p-3 mb-2 bs-green-300 text-white">.bs-green-300</div>
										<div class="p-3 mb-2 bs-green-400 text-white">.bs-green-400</div>
										<div class="p-3 mb-2 bs-green-500 text-white">.bs-green-500</div>
										<div class="p-3 mb-2 bs-green-600 text-white">.bs-green-600</div>
										<div class="p-3 mb-2 bs-green-700 text-white">.bs-green-700</div>
										<div class="p-3 mb-2 bs-green-800 text-white">.bs-green-800</div>
										<div class="p-3 mb-2 bs-green-900 text-white">.bs-green-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-teal-100 text-white">.bs-teal-100</div>
										<div class="p-3 mb-2 bs-teal-200 text-white">.bs-teal-200</div>
										<div class="p-3 mb-2 bs-teal-300 text-white">.bs-teal-300</div>
										<div class="p-3 mb-2 bs-teal-400 text-white">.bs-teal-400</div>
										<div class="p-3 mb-2 bs-teal-500 text-white">.bs-teal-500</div>
										<div class="p-3 mb-2 bs-teal-600 text-white">.bs-teal-600</div>
										<div class="p-3 mb-2 bs-teal-700 text-white">.bs-teal-700</div>
										<div class="p-3 mb-2 bs-teal-800 text-white">.bs-teal-800</div>
										<div class="p-3 mb-2 bs-teal-900 text-white">.bs-teal-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-cyan-100 text-white">.bs-cyan-100</div>
										<div class="p-3 mb-2 bs-cyan-200 text-white">.bs-cyan-200</div>
										<div class="p-3 mb-2 bs-cyan-300 text-white">.bs-cyan-300</div>
										<div class="p-3 mb-2 bs-cyan-400 text-white">.bs-cyan-400</div>
										<div class="p-3 mb-2 bs-cyan-500 text-white">.bs-cyan-500</div>
										<div class="p-3 mb-2 bs-cyan-600 text-white">.bs-cyan-600</div>
										<div class="p-3 mb-2 bs-cyan-700 text-white">.bs-cyan-700</div>
										<div class="p-3 mb-2 bs-cyan-800 text-white">.bs-cyan-800</div>
										<div class="p-3 mb-2 bs-cyan-900 text-white">.bs-cyan-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bs-gray-100 text-white">.bs-gray-100</div>
										<div class="p-3 mb-2 bs-gray-200 text-white">.bs-gray-200</div>
										<div class="p-3 mb-2 bs-gray-300 text-white">.bs-gray-300</div>
										<div class="p-3 mb-2 bs-gray-400 text-white">.bs-gray-400</div>
										<div class="p-3 mb-2 bs-gray-500 text-white">.bs-gray-500</div>
										<div class="p-3 mb-2 bs-gray-600 text-white">.bs-gray-600</div>
										<div class="p-3 mb-2 bs-gray-700 text-white">.bs-gray-700</div>
										<div class="p-3 mb-2 bs-gray-800 text-white">.bs-gray-800</div>
										<div class="p-3 mb-2 bs-gray-900 text-white">.bs-gray-900</div>
									</div>
									<div class="col-xl-3 col-sm-6 mb-4">
										<div class="p-3 mb-2 bg-black text-white">.bg-black</div>
										<div class="p-3 mb-2 bg-white border">.bg-white</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <!-- container ends -->
        </div>
@endsection