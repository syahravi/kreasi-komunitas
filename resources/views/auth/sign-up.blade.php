@extends('auth.baseof')

@section('title', 'Sign Up | Kreasi Komunitas')

@section('content')
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo float-left">
                <img src="{{ asset('img/logo.png') }}" height="70" alt="Kreasi Komunitas" />
            </a>

            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-end">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i>Mendaftar</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group mb-3">
                            <label>Nama Lengkap</label>
                            <input name="name" type="text" class="form-control form-control-lg" placeholder="Nama Lengkap"/>
                        </div>

                        <div class="form-group mb-3">
                            <label>Surel</label>
                            <input name="email" type="email" class="form-control form-control-lg" placeholder="nama@email.com"/>
                        </div>

                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label>Sandi (Min. 8 karakter)</label>
                                    <input name="pwd" type="password" class="form-control form-control-lg" />
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label>Konfirmasi Sandi</label>
                                    <input name="pwd_confirm" type="password" class="form-control form-control-lg" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="AgreeTerms" name="agreeterms" type="checkbox"/>
                                    <label for="AgreeTerms">Saya setuju dengan <a href="#">syarat Penggunaan</a></label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="submit" class="btn btn-primary mt-2">Daftar</button>
                            </div>
                        </div>

                        <span class="mt-3 mb-3 line-thru text-center text-uppercase">
                            <span>or</span>
                        </span>

                        {{-- TODO Koneksikan --}}
                        {{-- <div class="mb-1 text-center">
                            <a class="btn btn-facebook mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-twitter mb-3 ms-1 me-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
                        </div> --}}

                        <p class="text-center">Sudah punya akun. <a href="{{ route('sign-in') }}">Login disini</a></p>

                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
        </div>
    </section>
@endsection