@extends('auth.baseof')

@section('content')
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo float-left">
                <img src="{{ asset('img/logo.png') }}" height="70" alt="Porto Admin" />
            </a>

            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-end">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Lupa Password</h2>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <p class="m-0">Masukkan surel Anda di bawah ini dan kami akan mengirimkan instruksi reset kata sandi!</p>
                    </div>

                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group">
                                <input name="username" type="email" placeholder="nama@email.com" class="form-control form-control-lg" />
                                <button class="btn btn-primary btn-lg" type="submit">Reset!</button>
                            </div>
                        </div>

                        <p class="text-center mt-3">Ingat kata sandi. <a href="{{ route('sign-in') }}">Login disini</a></p>
                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2023. All Rights Reserved.</p>
        </div>
    </section>
@endsection