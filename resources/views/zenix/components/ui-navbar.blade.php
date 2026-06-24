@extends('layouts.default')

@section('content')
		<div class="content-body default-height">
            <!-- container starts -->
            <div class="container-fluid navbar-page">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Bootstrap</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0);">Navbar</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Deafult Navbar</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                          <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-dark" href="javascript:void(0);">Link</a>
                                          </li>
                                          <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Dropdown
                                            </a>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                              <li><hr class="dropdown-divider"></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                          </li>
                                        </ul>
                                        <form class="d-flex" role="search">
                                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                          <button class="btn btn-outline-success" type="submit">Search</button>
                                        </form>
                                      </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Navbar Text</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <!-- As a link -->
                                <nav class="navbar bg-body-tertiary">
                                    <div class="container-fluid">
                                    <a class="navbar-brand" href="javascript:void(0);">Navbar (As a link)</a>
                                    </div>
                                </nav>
                                
                                <!-- As a heading -->
                                <nav class="navbar bg-body-tertiary">
                                    <div class="container-fluid">
                                    <span class="navbar-brand mb-0 h1">Navbar (As a heading)</span>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Image and text </h4>
                            </div>
                            <div class="card-body navbar_content">
                                <nav class="navbar bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">
                                        <img src="{{ asset('images/logo.png') }} " alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                                        Bootstrap
                                      </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Nav with lists, links and dropdowns </h4>
                            </div>
                            <div class="card-body navbar_content">
                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                      <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                          <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-dark" href="javascript:void(0);">Features</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-dark" href="javascript:void(0);">Pricing</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                </nav>

                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                        <div class="navbar-nav">
                                          <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                                          <a class="nav-link text-dark" href="javascript:void(0);">Features</a>
                                          <a class="nav-link text-dark" href="javascript:void(0);">Pricing</a>
                                          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </div>
                                      </div>
                                    </div>
                                </nav>

                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <ul class="navbar-nav">
                                          <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-dark" href="javascript:void(0);">Features</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-dark" href="javascript:void(0);">Pricing</a>
                                          </li>
                                          <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Dropdown link
                                            </a>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Forms Navbar</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <nav class="navbar bg-body-tertiary">
                                    <div class="container-fluid">
                                      <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-primary" type="submit">Search</button>
                                      </form>
                                    </div>
                                </nav>

                                <nav class="navbar bg-body-tertiary mb-4">
                                    <div class="container-fluid">
                                      <a class="navbar-brand">Navbar</a>
                                      <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-primary" type="submit">Search</button>
                                      </form>
                                    </div>
                                </nav>

                                <h6 class="mb-3 fw-medium">Input groups in navbar forms</h6>
                                <nav class="navbar bg-body-tertiary mb-4">
                                    <form class="container-fluid">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </form>
                                </nav>
                                
                                <h6 class="mb-3 fw-medium">Various buttons are supported as part of these navbar forms</h6>
                                <nav class="navbar bg-body-tertiary">
                                    <form class="container-fluid justify-content-start">
                                      <button class="btn btn-outline-success me-2" type="button">Main button</button>
                                      <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
                                    </form>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Navbar With text</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <nav class="navbar bg-body-tertiary">
                                    <div class="container-fluid">
                                      <span class="navbar-text text-black">
                                        Navbar text with an inline element
                                      </span>
                                    </div>
                                </nav>

                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Navbar w/ text</a>
                                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                      <div class="collapse navbar-collapse" id="navbarText">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                          <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-dark" href="javascript:void(0);">Features</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-dark" href="javascript:void(0);">Pricing</a>
                                          </li>
                                        </ul>
                                        <span class="navbar-text text-black">
                                          Navbar text with an inline element
                                        </span>
                                      </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Color Schemes</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
                                    <div class="container-fluid">
                                        <a class="navbar-brand">Navbar</a>
                                        <form class="d-flex" role="search">
                                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                          <button class="btn btn-light" type="submit">Search</button>
                                        </form>
                                    </div>
                                </nav>
                                
                                <nav class="navbar bg-primary" data-bs-theme="dark">
                                    <div class="container-fluid">
                                        <a class="navbar-brand">Navbar</a>
                                        <form class="d-flex" role="search">
                                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                          <button class="btn btn-light" type="submit">Search</button>
                                        </form>
                                    </div>
                                </nav>
                                
                                <nav class="navbar" style="background-color: #e3f2fd;">
                                    <div class="container-fluid">
                                        <a class="navbar-brand">Navbar</a>
                                        <form class="d-flex" role="search">
                                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                          <button class="btn btn-light" type="submit">Search</button>
                                        </form>
                                    </div>
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Navbar Container</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <div class="container">
                                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                      <div class="container-fluid">
                                        <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                      </div>
                                    </nav>
                                </div>
                                
                                <h6>Use any of the responsive containers to change how wide the content in your navbar is presented</h6>
                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-md">
                                      <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Placement</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <nav class="navbar bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Default</a>
                                    </div>
                                </nav>
                                <nav class="navbar fixed-top bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Fixed top</a>
                                    </div>
                                </nav>
                                <nav class="navbar fixed-bottom bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Fixed bottom</a>
                                    </div>
                                </nav>
                                <nav class="navbar sticky-top bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Sticky top</a>
                                    </div>
                                </nav>
                                <nav class="navbar sticky-bottom bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Sticky bottom</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Responsive Behaviour</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                        <a class="navbar-brand" href="javascript:void(0);">Hidden brand</a>
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                          <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-dark" href="javascript:void(0);">Link</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                          </li>
                                        </ul>
                                        <form class="d-flex" role="search">
                                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                          <button class="btn btn-outline-success" type="submit">Search</button>
                                        </form>
                                      </div>
                                    </div>
                                </nav>
                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                          <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-dark" href="javascript:void(0);">Link</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                          </li>
                                        </ul>
                                        <form class="d-flex" role="search">
                                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                          <button class="btn btn-outline-success" type="submit">Search</button>
                                        </form>
                                      </div>
                                    </div>
                                </nav>
                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                      <a class="navbar-brand" href="javascript:void(0);">Navbar</a>
                                      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                          <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link text-dark" href="javascript:void(0);">Link</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                          </li>
                                        </ul>
                                        <form class="d-flex" role="search">
                                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                          <button class="btn btn-outline-success" type="submit">Search</button>
                                        </form>
                                      </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">External Content</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
                                    <div class="bg-dark p-4">
                                      <h5 class="text-body-emphasis h4">Collapsed content</h5>
                                      <span class="text-body-secondary">Toggleable via the navbar brand.</span>
                                    </div>
                                </div>
                                <nav class="navbar navbar-dark bg-dark">
                                    <div class="container-fluid">
                                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Offcanvas</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <nav class="navbar bg-body-tertiary">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="javascript:void(0);">Offcanvas navbar</a>
                                      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                        <div class="offcanvas-header">
                                          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                            <li class="nav-item">
                                              <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link text-dark" href="javascript:void(0);">Link</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                              <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                              </a>
                                              <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li>
                                                  <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                              </ul>
                                            </li>
                                          </ul>
                                          <form class="d-flex mt-3" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success" type="submit">Search</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Offcanvas</h4>
                            </div>
                            <div class="card-body navbar_content">
                                <nav class="navbar navbar-dark bg-dark">
                                    <div class="container-fluid">
                                      <a class="navbar-brand text-white" href="javascript:void(0);">Offcanvas dark navbar</a>
                                      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                                      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                                        <div class="offcanvas-header">
                                          <h5 class="offcanvas-title text-white" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                            <li class="nav-item">
                                              <a class="nav-link active" aria-current="page" href="javascript:void(0);">Home</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link text-dark" href="javascript:void(0);">Link</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                              <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                              </a>
                                              <ul class="dropdown-menu dropdown-menu-dark">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                <li>
                                                  <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                              </ul>
                                            </li>
                                          </ul>
                                          <form class="d-flex mt-3" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-success" type="submit">Search</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container ends -->
        </div>
@endsection