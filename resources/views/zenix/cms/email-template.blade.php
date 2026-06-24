@extends('layouts.default')

@section('content')
     	<div class="content-body">
			<div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0);">Home</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0);">Email Template</a></li>
					</ol>
                </div>
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="filter cm-content-box box-primary">
							<div class="content-title SlideToolHeader">
								<div class="cpa">
									<i class="fa-sharp fa-solid fa-filter me-2"></i>Filter
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand handle"><i
											class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-3 col-sm-6">
											<label class="form-label">Title</label>
											<input type="text" class="form-control mb-xl-0 mb-3"
												id="exampleFormControlInput1" placeholder="Title">
										</div>
										<div class="col-xl-3  col-sm-6 mb-3 mb-xl-0">
											<label class="form-label">Status</label>
											<select class="form-control default-select h-auto wide"
												aria-label="Default select example">
												<option selected>Select Status</option>
												<option value="active">Active</option>
												<option value="inactive">Inactive</option>
											</select>
										</div>
										<div class="col-xl-3 col-sm-6">
											<label class="form-label">Date</label>
											<div class="input-hasicon mb-sm-0 mb-3">
												<input name="datepicker" class="form-control bt-datepicker">
												<div class="icon"><i class="far fa-calendar"></i></div>
											</div>
										</div>
										<div class="col-xl-3 col-sm-6 align-self-end text-nowrap">
											<div>
												<button class="btn btn-primary me-2" title="Click here to Search"
													type="button"><i class="fa fa-filter me-1"></i>Filter</button>
												<button class="btn btn-danger light" title="Click here to remove filter"
													type="button">Remove Filter</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-4 pb-3">
							<ul class="d-flex align-items-center">
								<li><a href="{{ url('cms/add-email') }}" class="btn btn-primary btn-sm mx-1">New Email Template</a></li>
							</ul>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title SlideToolHeader">
								<div class="cpa">
									<i class="fa-solid fa-envelope me-1"></i> Email Template List
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand handle"><i
											class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body pb-4">
									<div class="table-responsive">
										<table class="table table-condensed flip-content border-collapse-separate">
											<thead>
												<tr>
													<th>Sr.No</th>
													<th>Title</th>
													<th>Status</th>
													<th>Modified</th>
													<th class="pe-4 text-end">Actions</th>

												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>User Registration</td>
													<td><span class="badge badge-success light">Active</span></td>
													<td>03 Feb, 2024</td>
													<td class="text-nowrap text-end">
														<a href="javascript:void(0);"
															class="btn btn-warning btn-sm content-icon">
															<i class="fa-solid fa-pen-to-square"></i>
														</a>
														<a href="javascript:void(0);"
															class="btn btn-danger btn-sm content-icon me-0">
															<i class="fa-solid fa-trash"></i>
														</a>
													</td>

												</tr>
												<tr>
													<td>2</td>
													<td>User Forgot Password</td>
													<td><span class="badge badge-danger light">Inactive</span></td>
													<td>04 Feb, 2024</td>
													<td class="text-nowrap text-end">
														<a href="javascript:void(0);"
															class="btn btn-warning btn-sm content-icon">
															<i class="fa-solid fa-pen-to-square"></i>
														</a>
														<a href="javascript:void(0);"
															class="btn btn-danger btn-sm content-icon me-0">
															<i class="fa-solid fa-trash"></i>
														</a>
													</td>

												</tr>
												<tr>
													<td>3</td>
													<td>User Activation</td>
													<td><span class="badge badge-success light">Active</span></td>
													<td>05 Feb, 2024</td>
													<td class="text-nowrap text-end">
														<a href="javascript:void(0);"
															class="btn btn-warning btn-sm content-icon">
															<i class="fa-solid fa-pen-to-square"></i>
														</a>
														<a href="javascript:void(0);"
															class="btn btn-danger btn-sm content-icon me-0">
															<i class="fa-solid fa-trash"></i>
														</a>
													</td>

												</tr>
												<tr>
													<td>4</td>
													<td>User Login</td>
													<td><span class="badge badge-success light">Active</span></td>
													<td>06 Feb, 2024</td>
													<td class="text-nowrap text-end">
														<a href="javascript:void(0);"
															class="btn btn-warning btn-sm content-icon">
															<i class="fa-solid fa-pen-to-square"></i>
														</a>
														<a href="javascript:void(0);"
															class="btn btn-danger btn-sm content-icon me-0">
															<i class="fa-solid fa-trash"></i>
														</a>
													</td>

												</tr>
												<tr>
													<td>5</td>
													<td>User Account Locked</td>
													<td><span class="badge badge-danger light">Inactive</span></td>
													<td>07 Feb, 2024</td>
													<td class="text-nowrap text-end">
														<a href="javascript:void(0);"
															class="btn btn-warning btn-sm content-icon">
															<i class="fa-solid fa-pen-to-square"></i>
														</a>
														<a href="javascript:void(0);"
															class="btn btn-danger btn-sm content-icon me-0">
															<i class="fa-solid fa-trash"></i>
														</a>
													</td>

												</tr>

											</tbody>
										</table>
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<small class="mb-2 me-3">Page 1 of 5, showing 2 records out of 8 total, starting
												on record 1, ending on 2</small>
											<nav aria-label="Page navigation example mb-2">
												<ul class="pagination mb-2 mb-sm-0">
													<li class="page-item"><a class="page-link"
															href="javascript:void(0);"><i
																class="fa-solid fa-angle-left"></i></a></li>
													<li class="page-item"><a class="page-link"
															href="javascript:void(0);">1</a></li>
													<li class="page-item"><a class="page-link"
															href="javascript:void(0);">2</a></li>
													<li class="page-item"><a class="page-link"
															href="javascript:void(0);">3</a></li>
													<li class="page-item"><a class="page-link "
															href="javascript:void(0);"><i
																class="fa-solid fa-angle-right"></i></a></li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Job Title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Company Name<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Position<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Job Category<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>QA Analyst</option>
										   <option>IT Manager</option>
										    <option>Systems Analyst</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Job Type<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>Part-Time</option>
										   <option>Full-Time</option>
										    <option>Freelancer</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">No. of Vancancy<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Name" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Select Experience<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>1 yr</option>
										  <option>2 Yr</option>
										   <option>3 Yr</option>
										    <option>4 Yr</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Posted Date<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input type="date" name="datepicker" class="form-control">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Last Date To Apply<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input type="date" name="datepicker" class="form-control">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Close Date<span class="text-danger scale5 ms-2">*</span></label>
										<div class="input-group">
											 <div class="input-group-text"><i class="far fa-clock"></i></div>
											<input type="date" name="datepicker" class="form-control">
										</div>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
										<label  class="form-label font-w600">Select Gender:<span class="text-danger scale5 ms-2">*</span></label>
										<select  class="nice-select default-select wide form-control solid">
										  <option selected>Choose...</option>
										  <option>Male</option>
										   <option>Female</option>
										</select>
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Salary Form<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Salary To<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter City:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="$" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter State:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="State" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter Counter:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="State" aria-label="name">
									</div>
									<div class="col-xl-6  col-md-6 mb-4">
									  <label  class="form-label font-w600">Enter Education Level:<span class="text-danger scale5 ms-2">*</span></label>
										<input type="text" class="form-control solid" placeholder="Education Level" aria-label="name">
									</div>
									<div class="col-xl-12 mb-4">
										  <label  class="form-label font-w600">Description:<span class="text-danger scale5 ms-2">*</span></label>
										  <textarea class="form-control solid" rows="5" aria-label="With textarea"></textarea>
									</div>
								</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
@endsection