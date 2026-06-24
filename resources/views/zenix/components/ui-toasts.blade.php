@extends('layouts.default')

@section('content')
        <div class="content-body default-height">
            <!-- container starts -->
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Bootstrap</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0);">Toasts</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Live Toast</h4>
                            </div>
                            <div class="card-body">
								<button type="button" class="btn btn-primary me-2 mb-2 liveToastBtn">Top Left Toast</button>
								<div class="toast-container position-fixed top-0 start-0 p-3">
									<div class="toast livetoast" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header">
											<strong class="me-auto">Bootstrap</strong>
											<small class="text-body-secondary">11 mins ago</small>
											<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
								<button type="button" class="btn btn-primary me-2 mb-2 liveToastBtn">Top Right Toast</button>
								<div class="toast-container position-fixed top-0 end-0 p-3">
									<div class="toast livetoast" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header">
											<strong class="me-auto">Bootstrap</strong>
											<small class="text-body-secondary">11 mins ago</small>
											<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
								<button type="button" class="btn btn-primary me-2 mb-2 liveToastBtn">Bottom Left Toast</button>
								<div class="toast-container position-fixed bottom-0 start-0 p-3">
									<div class="toast livetoast" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header">
											<strong class="me-auto">Bootstrap</strong>
											<small class="text-body-secondary">11 mins ago</small>
											<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
								<button type="button" class="btn btn-primary me-2 mb-2 liveToastBtn">Bottm Right Toast</button>
								<div class="toast-container position-fixed bottom-0 end-0 p-3">
									<div class="toast livetoast" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header">
											<strong class="me-auto">Bootstrap</strong>
											<small class="text-body-secondary">11 mins ago</small>
											<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic example</h4>
                            </div>
                            <div class="card-body">
								<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
									<div class="toast-header">
										<?xml version="1.0" encoding="UTF-8"?>
										<svg class="me-2" width="15px" height="15px" version="1.1" viewBox="-1 0 30 30" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" fill-rule="evenodd">
										<g transform="translate(-362 -880)" fill="var(--primary)">
										<path d="m365 904 3-6v-8c0-4.418 3.582-8 8-8s8 3.582 8 8v8l3 6h-22zm11 4c-1.305 0-2.403-0.837-2.816-2h5.632c-0.413 1.163-1.511 2-2.816 2zm10-10v-8c0-5.522-4.478-10-10-10s-10 4.478-10 10v8l-4 8h9.101c0.463 2.282 2.48 4 4.899 4s4.436-1.718 4.899-4h9.101l-4-8z"></path>
										</g>
										</g>
										</svg>
									  <strong class="me-auto">Bootstrap</strong>
									  <small class="text-body-secondary">11 mins ago</small>
									  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
									</div>
									<div class="toast-body">
									  Hello, world! This is a toast message.
									</div>
								  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Stacking Toasts</h4>
                            </div>
                            <div class="card-body">
								<div class="toast-container position-static">
									<div class="toast show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
									  <div class="toast-header">
										<?xml version="1.0" encoding="UTF-8"?>
										<svg class="me-2" width="15px" height="15px" version="1.1" viewBox="-1 0 30 30" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" fill-rule="evenodd">
										<g transform="translate(-362 -880)" fill="var(--primary)">
										<path d="m365 904 3-6v-8c0-4.418 3.582-8 8-8s8 3.582 8 8v8l3 6h-22zm11 4c-1.305 0-2.403-0.837-2.816-2h5.632c-0.413 1.163-1.511 2-2.816 2zm10-10v-8c0-5.522-4.478-10-10-10s-10 4.478-10 10v8l-4 8h9.101c0.463 2.282 2.48 4 4.899 4s4.436-1.718 4.899-4h9.101l-4-8z"></path>
										</g>
										</g>
										</svg>
										<strong class="me-auto">Bootstrap</strong>
										<small class="text-body-secondary">just now</small>
										<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
									  </div>
									  <div class="toast-body">
										See? Just like this.
									  </div>
									</div>
								  
									<div class="toast show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
									  <div class="toast-header">
										<?xml version="1.0" encoding="UTF-8"?>
										<svg class="me-2" width="15px" height="15px" version="1.1" viewBox="-1 0 30 30" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" fill-rule="evenodd">
										<g transform="translate(-362 -880)" fill="var(--secondary)">
										<path d="m365 904 3-6v-8c0-4.418 3.582-8 8-8s8 3.582 8 8v8l3 6h-22zm11 4c-1.305 0-2.403-0.837-2.816-2h5.632c-0.413 1.163-1.511 2-2.816 2zm10-10v-8c0-5.522-4.478-10-10-10s-10 4.478-10 10v8l-4 8h9.101c0.463 2.282 2.48 4 4.899 4s4.436-1.718 4.899-4h9.101l-4-8z"></path>
										</g>
										</g>
										</svg>
										<strong class="me-auto">Bootstrap</strong>
										<small class="text-body-secondary">2 seconds ago</small>
										<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
									  </div>
									  <div class="toast-body">
										Heads up, toasts will stack automatically
									  </div>
									</div>
									
									<div class="toast show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header">
										  <?xml version="1.0" encoding="UTF-8"?>
										<svg class="me-2" width="15px" height="15px" version="1.1" viewBox="-1 0 30 30" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" fill-rule="evenodd">
										<g transform="translate(-362 -880)" fill="#2BC155">
										<path d="m365 904 3-6v-8c0-4.418 3.582-8 8-8s8 3.582 8 8v8l3 6h-22zm11 4c-1.305 0-2.403-0.837-2.816-2h5.632c-0.413 1.163-1.511 2-2.816 2zm10-10v-8c0-5.522-4.478-10-10-10s-10 4.478-10 10v8l-4 8h9.101c0.463 2.282 2.48 4 4.899 4s4.436-1.718 4.899-4h9.101l-4-8z"></path>
										</g>
										</g>
										</svg>
										  <strong class="me-auto">Bootstrap</strong>
										  <small class="text-body-secondary">5 minutes ago</small>
										  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
										  See? Just like this.
										</div>
									</div>
								  
									  <div class="toast show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header">
										  <?xml version="1.0" encoding="UTF-8"?>
										<svg class="me-2" width="15px" height="15px" version="1.1" viewBox="-1 0 30 30" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" fill-rule="evenodd">
										<g transform="translate(-362 -880)" fill="#FF2E2E">
										<path d="m365 904 3-6v-8c0-4.418 3.582-8 8-8s8 3.582 8 8v8l3 6h-22zm11 4c-1.305 0-2.403-0.837-2.816-2h5.632c-0.413 1.163-1.511 2-2.816 2zm10-10v-8c0-5.522-4.478-10-10-10s-10 4.478-10 10v8l-4 8h9.101c0.463 2.282 2.48 4 4.899 4s4.436-1.718 4.899-4h9.101l-4-8z"></path>
										</g>
										</g>
										</svg>
										  <strong class="me-auto">Bootstrap</strong>
										  <small class="text-body-secondary">8 seconds ago</small>
										  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
										  Heads up, toasts will stack automatically
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
					<div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Color Scheme</h4>
                            </div>
                            <div class="card-body">
								<div class="toast-container position-static">
									<div class="toast show align-items-center mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="d-flex">
											<div class="toast-body">
												Hello, world! This is a toast message.
											</div>
											<button type="button" class="btn-close me-2 m-auto p-3" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
									</div>
									<div class="toast show align-items-center text-white bg-primary border-0 mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="d-flex">
											<div class="toast-body">
												Hello, world! This is a toast message.
											</div>
											<button type="button" class="btn-close btn-close-white me-2 m-auto p-3" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
									</div>
									<div class="toast show align-items-center text-white bg-secondary border-0 mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="d-flex">
											<div class="toast-body">
												Hello, world! This is a toast message.
											</div>
											<button type="button" class="btn-close btn-close-white me-2 m-auto p-3" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
									</div>
									<div class="toast show align-items-center text-white bg-success border-0 mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="d-flex">
											<div class="toast-body">
												Hello, world! This is a toast message.
											</div>
											<button type="button" class="btn-close btn-close-white me-2 m-auto p-3" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
									</div>
									<div class="toast show align-items-center text-white bg-danger border-0 mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="d-flex">
											<div class="toast-body">
												Hello, world! This is a toast message.
											</div>
											<button type="button" class="btn-close btn-close-white me-2 m-auto p-3" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
									</div>
									<div class="toast show align-items-center text-white bg-info border-0 mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="d-flex">
											<div class="toast-body">
												Hello, world! This is a toast message.
											</div>
											<button type="button" class="btn-close btn-close-white me-2 m-auto p-3" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
									</div>
									<div class="toast show align-items-center text-white bg-warning border-0 mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="d-flex">
											<div class="toast-body">
												Hello, world! This is a toast message.
											</div>
											<button type="button" class="btn-close btn-close-white me-2 m-auto p-3" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div> 
					<div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">button Toasts</h4>
                            </div>
                            <div class="card-body">
								<div class="toast-container position-static">
									<div class="toast show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
									  <div class="toast-header">
										<?xml version="1.0" encoding="UTF-8"?>
										<svg class="me-2" width="15px" height="15px" version="1.1" viewBox="-1 0 30 30" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" fill-rule="evenodd">
										<g transform="translate(-362 -880)" fill="var(--primary)">
										<path d="m365 904 3-6v-8c0-4.418 3.582-8 8-8s8 3.582 8 8v8l3 6h-22zm11 4c-1.305 0-2.403-0.837-2.816-2h5.632c-0.413 1.163-1.511 2-2.816 2zm10-10v-8c0-5.522-4.478-10-10-10s-10 4.478-10 10v8l-4 8h9.101c0.463 2.282 2.48 4 4.899 4s4.436-1.718 4.899-4h9.101l-4-8z"></path>
										</g>
										</g>
										</svg>
										<strong class="me-auto">Bootstrap</strong>
										<small class="text-body-secondary">just now</small>
										<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
									  </div>
									  <div class="toast-body">
											Hello, world! This is a toast message.
											<div class="mt-2 pt-2 border-top">
											<button type="button" class="btn btn-primary btn-sm">Take action</button>
											<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
											</div>
										</div>
									</div>
								  
									<div class="toast show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
									  <div class="toast-header">
										<?xml version="1.0" encoding="UTF-8"?>
										<svg class="me-2" width="15px" height="15px" version="1.1" viewBox="-1 0 30 30" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" fill-rule="evenodd">
										<g transform="translate(-362 -880)" fill="#2BC155">
										<path d="m365 904 3-6v-8c0-4.418 3.582-8 8-8s8 3.582 8 8v8l3 6h-22zm11 4c-1.305 0-2.403-0.837-2.816-2h5.632c-0.413 1.163-1.511 2-2.816 2zm10-10v-8c0-5.522-4.478-10-10-10s-10 4.478-10 10v8l-4 8h9.101c0.463 2.282 2.48 4 4.899 4s4.436-1.718 4.899-4h9.101l-4-8z"></path>
										</g>
										</g>
										</svg>
										<strong class="me-auto">Bootstrap</strong>
										<small class="text-body-secondary">2 seconds ago</small>
										<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
									  </div>
									  <div class="toast-body">
											Hello, world! This is a toast message.
											<div class="mt-2 pt-2 border-top">
											<button type="button" class="btn btn-success btn-sm">Take action</button>
											<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
											</div>
										</div>
									</div>
									
									<div class="toast show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header">
										  <?xml version="1.0" encoding="UTF-8"?>
										<svg class="me-2" width="15px" height="15px" version="1.1" viewBox="-1 0 30 30" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" fill-rule="evenodd">
										<g transform="translate(-362 -880)" fill="#FF2E2E">
										<path d="m365 904 3-6v-8c0-4.418 3.582-8 8-8s8 3.582 8 8v8l3 6h-22zm11 4c-1.305 0-2.403-0.837-2.816-2h5.632c-0.413 1.163-1.511 2-2.816 2zm10-10v-8c0-5.522-4.478-10-10-10s-10 4.478-10 10v8l-4 8h9.101c0.463 2.282 2.48 4 4.899 4s4.436-1.718 4.899-4h9.101l-4-8z"></path>
										</g>
										</g>
										</svg>
										  <strong class="me-auto">Bootstrap</strong>
										  <small class="text-body-secondary">5 minutes ago</small>
										  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
											Hello, world! This is a toast message.
											<div class="mt-2 pt-2 border-top">
											<button type="button" class="btn btn-danger btn-sm">Take action</button>
											<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div> 
					<div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Solid Background Toast</h4>
                            </div>
                            <div class="card-body">
								<div class="toast-container position-static custom-toast">
									<div class="toast overflow-hidden show" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header bg-primary text-white">
											<strong class="me-auto">Bootstrap</strong>
											<small>11 mins ago</small>
											<button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
									<div class="toast overflow-hidden show" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header bg-secondary text-white">
											<strong class="me-auto">Bootstrap</strong>
											<small>11 mins ago</small>
											<button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
									<div class="toast overflow-hidden show" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header bg-success text-white">
											<strong class="me-auto">Bootstrap</strong>
											<small>11 mins ago</small>
											<button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
									<div class="toast overflow-hidden show" role="alert" aria-live="assertive" aria-atomic="true">
										<div class="toast-header bg-danger text-white">
											<strong class="me-auto">Bootstrap</strong>
											<small>11 mins ago</small>
											<button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
										</div>
										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
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

@section('local-js')
<script>
	const toastElList = document.querySelectorAll('.livetoast')
	const toastList = [...toastElList].map(toastEl => new bootstrap.Toast(toastEl, {}));
	const toastTrigger = document.querySelectorAll('.liveToastBtn');
	toastTrigger.forEach(function(item,index) {
	const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastList[index]._element)
		item.addEventListener('click', () => {
				toastBootstrap.show()
		})
	})
</script>
@endsection