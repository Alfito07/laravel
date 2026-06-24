@extends('layouts.default')

@section('content')
		<div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0);">Bootstrap</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0);">Scrollspy</a></li>
					</ol>
                </div>
                <!-- row -->
				<div class="page-content space-top">
					<div class="row">
						<div class="col-xl-6 col-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Navbar</h4>
								</div>
								<div class="card-body scrollspy">
									<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
										<a class="navbar-brand text-black" href="javascript:void(0);">Navbar</a>
										<ul class="nav nav-pills">
										  <li class="nav-item">
											<a class="nav-link" href="#scrollspyHeading1">First</a>
										  </li>
										  <li class="nav-item">
											<a class="nav-link" href="#scrollspyHeading2">Second</a>
										  </li>
										  <li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button" aria-expanded="false">Dropdown</a>
											<ul class="dropdown-menu">
											  <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
											  <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
											  <li><hr class="dropdown-divider"></li>
											  <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
											</ul>
										  </li>
										</ul>
									</nav>
									<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
										<h4 id="scrollspyHeading1">First heading</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
										<h4 id="scrollspyHeading2">Second heading</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
										<h4 id="scrollspyHeading3">Third heading</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
										<h4 id="scrollspyHeading4">Fourth heading</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
										<h4 id="scrollspyHeading5">Fifth heading</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Nested Nav</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-4">
										  <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
											<nav class="nav nav-pills flex-column">
											  <a class="nav-link" href="#item-1">Item 1</a>
											  <nav class="nav nav-pills flex-column">
												<a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
												<a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
											  </nav>
											  <a class="nav-link" href="#item-2">Item 2</a>
											  <a class="nav-link" href="#item-3">Item 3</a>
											  <nav class="nav nav-pills flex-column">
												<a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
												<a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
											  </nav>
											</nav>
										  </nav>
										</div>
									  
										<div class="col-8">
										  <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
											<div id="item-1">
											  <h4>Item 1</h4>
											  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
											<div id="item-1-1">
											  <h5>Item 1-1</h5>
											  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
											<div id="item-1-2">
											  <h5>Item 1-2</h5>
											  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
											<div id="item-2">
											  <h4>Item 2</h4>
											  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
											<div id="item-3">
											  <h4>Item 3</h4>
											  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
											<div id="item-3-1">
											  <h5>Item 3-1</h5>
											  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
											<div id="item-3-2">
											  <h5>Item 3-2</h5>
											  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											</div>
										  </div>
										</div>
									  </div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">List Group</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-4">
										  <div id="list-example" class="list-group">
											<a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
											<a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
											<a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
											<a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
										  </div>
										</div>
										<div class="col-8">
										  <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
											<h4 id="list-item-1">Item 1</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											<h4 id="list-item-2">Item 2</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											<h4 id="list-item-3">Item 3</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											<h4 id="list-item-4">Item 4</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
										  </div>
										</div>
									  </div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Simple Anchors</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-4">
										  <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
											<a class="p-1 rounded" href="#simple-list-item-1">Item 1</a>
											<a class="p-1 rounded" href="#simple-list-item-2">Item 2</a>
											<a class="p-1 rounded" href="#simple-list-item-3">Item 3</a>
											<a class="p-1 rounded" href="#simple-list-item-4">Item 4</a>
											<a class="p-1 rounded" href="#simple-list-item-5">Item 5</a>
											<a class="p-1 rounded" href="#simple-list-item-6">Item 6</a>
											<a class="p-1 rounded" href="#simple-list-item-7">Item 7</a>
										  </div>
										</div>
										<div class="col-8">
										  <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
											<h4 id="simple-list-item-1">Item 1</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											<h4 id="simple-list-item-2">Item 2</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											<h4 id="simple-list-item-3">Item 3</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											<h4 id="simple-list-item-4">Item 4</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											<h4 id="simple-list-item-5">Item 5</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											<h4 id="simple-list-item-6">Item 6</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
											<h4 id="simple-list-item-7">Item 7</h4>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
										  </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
@endsection

@section('local-js')
    <script>
		const scrollSpy = new bootstrap.ScrollSpy(document.body, {
			target: '#navbar-example'
		})
	</script>
@endsection