@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">

            <section class="card">
                <div class="card-body">
                    <div class="thumb-info mb-3">
                        <img src="{{ asset('img/user-profile.jpg') }}" class="rounded img-fluid" alt="John Doe">
                        <div class="thumb-info-title">
                            <span class="thumb-info-inner">Syahravi</span>
                            <span class="thumb-info-type">Unusia</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="widget-header">
                            <h5 class="mb-2 font-weight-semibold text-dark">Kelengkapan Profil</h5>
                        </div>
                        <div>
                            <div class="progress progress-xs light">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-expanded">
                            <ul class="simple-todo-list mt-3">
                                <li class="completed">Perbarui Foto Profil</li>
                                <li class="completed">Ganti Informasi Personal</li>
                                <li>Lakukan Postingan Pertama</li>
                                <li>Ikuti Seseorang</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="dotted short">

                    <h5 class="mb-2 mt-3">About</h5>
                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p>

                    <hr class="dotted short">

                    <div class="social-icons-list">
                        <a rel="tooltip" data-bs-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                        <a rel="tooltip" data-bs-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                        <a rel="tooltip" data-bs-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                    </div>

                </div>
            </section>

            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">
                        <span class="badge badge-primary label-sm font-weight-normal va-middle me-3">298</span>
                        <span class="va-middle">Friends</span>
                    </h2>
                </header>
                <div class="card-body">
                    <div class="content">
                        <ul class="simple-user-list">
                            <li>
                                <figure class="image rounded">
                                    <img src="{{ asset('img/sample-user.jpg') }}" alt="Joseph Doe Junior" class="rounded-circle">
                                </figure>
                                <span class="title">Saeful Mu'minin</span>
                                <span class="message truncate">Lorem ipsum dolor sit.</span>
                            </li>
                            <li>
                                <figure class="image rounded">
                                    <img src="{{ asset('img/sample-user.jpg') }}" alt="Joseph Junior" class="rounded-circle">
                                </figure>
                                <span class="title">Sarip Hidayat</span>
                                <span class="message truncate">Lorem ipsum dolor sit.</span>
                            </li>
                            <li>
                                <figure class="image rounded">
                                    <img src="{{ asset('img/sample-user.jpg') }}" alt="Joe Junior" class="rounded-circle">
                                </figure>
                                <span class="title">Kholil Rohman</span>
                                <span class="message truncate">Lorem ipsum dolor sit.</span>
                            </li>
                            <li>
                                <figure class="image rounded">
                                    <img src="{{ asset('img/sample-user.jpg') }}" alt="Joseph Doe Junior" class="rounded-circle">
                                </figure>
                                <span class="title">Fajri Hidayat</span>
                                <span class="message truncate">Lorem ipsum dolor sit.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="input-group">
                        <input type="text" class="form-control" name="s" id="s" placeholder="Search...">
                        <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
                    </div>
                </div>
            </section>

        </div>
        <div class="col-lg-8 col-xl-6">

            <div class="tabs">
                <ul class="nav nav-tabs tabs-primary">
                    <li class="nav-item active">
                        <button class="nav-link" data-bs-target="#overview" data-bs-toggle="tab">Overview</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-target="#edit" data-bs-toggle="tab">Edit</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="overview" class="tab-pane active">

                        <div class="p-3">

                            <h4 class="mb-3 font-weight-semibold text-dark">Update Status</h4>

                            <section class="simple-compose-box mb-3">
                                <form method="get" action="/">
                                    <textarea name="message-text" data-plugin-textarea-autosize placeholder="Apa yang Anda pikirkan, Ravi?" rows="1"></textarea>
                                </form>
                                <div class="compose-box-footer">
                                    <ul class="compose-toolbar">
                                        <li>
                                            <a href="#"><i class="fas fa-camera"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                                        </li>
                                    </ul>
                                    <ul class="compose-btn">
                                        <li>
                                            <a href="#" class="btn btn-primary btn-xs">Post</a>
                                        </li>
                                    </ul>
                                </div>
                            </section>

                            <h4 class="mb-3 pt-4 font-weight-semibold text-dark">Timeline</h4>

                            <div class="timeline timeline-simple mt-3 mb-3">
                                <div class="tm-body">
                                    <div class="tm-title">
                                        <h5 class="m-0 pt-2 pb-2 text-dark font-weight-semibold text-uppercase">Juni 2023</h5>
                                    </div>
                                    <ol class="tm-items">
                                        <li>
                                            <div class="tm-box">
                                                <p class="text-muted mb-0">7 minggu yang lalu.</p>
                                                <p>
                                                    It's awesome when we find a good solution for our projects, Kreasi Komunitas is <span class="text-primary">#awesome</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tm-box">
                                                <p class="text-muted mb-0">7 minggu yang lalu.</p>
                                                <p>
                                                    What is your biggest developer pain point?
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tm-box">
                                                <p class="text-muted mb-0">7 minggu yang lalu.</p>
                                                <p>
                                                    Checkout! How cool is that!
                                                </p>
                                                <div class="thumbnail-gallery">
                                                    <a class="img-thumbnail lightbox" href="/" data-plugin-options='{ "type":"image" }'>
                                                        <img class="img-fluid" width="215" src="{{ asset('img/user-profile.jpg') }}">
                                                        <span class="zoom">
                                                            <i class="bx bx-search"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="edit" class="tab-pane">

                        <form class="p-3">
                            <h4 class="mb-3 font-weight-semibold text-dark">Personal Information</h4>
                            <div class="row row mb-4">
                                <div class="form-group col">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4 border-top-0 pt-0">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2 border-top-0 pt-0">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>

                            <hr class="dotted tall">

                            <h4 class="mb-3 font-weight-semibold text-dark">Change Password</h4>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">New Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6 border-top-0 pt-0">
                                    <label for="inputPassword5">Re New Password</label>
                                    <input type="password" class="form-control" id="inputPassword5" placeholder="Password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-end mt-3">
                                    <button class="btn btn-primary modal-confirm">Save</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">

            <h4 class="mb-3 mt-4 pt-2 font-weight-semibold text-dark">Projects</h4>
            <ul class="simple-bullet-list mb-3">
                <li class="red">
                    <a href="http://syahravi.my.id/" target="_blank" rel="noopener noreferrer">
                        <span class="title">Syahravi</span>
                        <span class="description truncate">Lorem ipsom dolor sit.</span>
                    </a>
                </li>
                <li class="green">
                    <a href="http://syahravi.my.id/" target="_blank" rel="noopener noreferrer">
                        <span class="title">Fundus</span>
                        <span class="description truncate">Lorem ipsom dolor sit amet</span>
                    </a>
                </li>
                <li class="blue">
                    <a href="http://syahravi.my.id/" target="_blank" rel="noopener noreferrer">
                        <span class="title">Besarjana</span>
                        <span class="description truncate">Lorem ipsom dolor sit.</span>
                    </a>
                </li>
                <li class="orange">
                    <a href="http://syahravi.my.id/" target="_blank" rel="noopener noreferrer">
                        <span class="title">Kreasi Komunitas</span>
                        <span class="description truncate">Lorem ipsom dolor sit.</span>
                    </a>
                </li>
            </ul>

            <h4 class="mb-3 mt-4 pt-2 font-weight-semibold text-dark">Messages</h4>
            <ul class="simple-user-list mb-3">
                <li>
                    <figure class="image rounded">
                        <img src="{{ asset('img/sample-user.jpg') }}" alt="Joseph Doe Junior" class="rounded-circle">
                    </figure>
                    <span class="title">Joseph Doe Junior</span>
                    <span class="message">Lorem ipsum dolor sit.</span>
                </li>
                <li>
                    <figure class="image rounded">
                        <img src="{{ asset('img/sample-user.jpg') }}" alt="Joseph Junior" class="rounded-circle">
                    </figure>
                    <span class="title">Joseph Junior</span>
                    <span class="message">Lorem ipsum dolor sit.</span>
                </li>
                <li>
                    <figure class="image rounded">
                        <img src="{{ asset('img/sample-user.jpg') }}" alt="Joe Junior" class="rounded-circle">
                    </figure>
                    <span class="title">Joe Junior</span>
                    <span class="message">Lorem ipsum dolor sit.</span>
                </li>
                <li>
                    <figure class="image rounded">
                        <img src="{{ asset('img/sample-user.jpg') }}" alt="Joseph Doe Junior" class="rounded-circle">
                    </figure>
                    <span class="title">Joseph Doe Junior</span>
                    <span class="message">Lorem ipsum dolor sit.</span>
                </li>
            </ul>
        </div>
    </div>
@endsection