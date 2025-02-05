@extends('layouts.root')

@section('root-content')
<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a style="pointer-events: none;" class="logo d-flex align-items-center w-auto">
                            <img src="" alt="">
                            <span class="d-none d-lg-block fs-2">Rent Room Smenza</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">
                        @if (session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                            
                        <div class="card-body">
                            @if ($errors->any())
                                <ul class="alert alert-danger" style="padding-left: 2rem;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Login Ke akun anda</h5>
                                <p class="text-center small">Masukan Email dan Password</p>
                            </div>
                            <form class="row g-3 needs-validation" novalidate enctype="application/x-www-form-urlencoded" action="{{ route('login.post') }}">
                                @csrf
                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" name="email" class="form-control" id="yourUsername" required>
                                        <div class="invalid-feedback">Email Belum di isi</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword"
                                        required>
                                    <div class="invalid-feedback">Password Belum di Isi!</div>
                                </div>


                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection