@extends('layouts.headerFooter')

@section('content')
    <section class="vh-100" style="background-color: #EEF0E5;">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong mt-5" style="border-radius: 1rem; width: 30rem">
                    <div class="card-body p-5">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session()->get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <h3 class="mb-5 text-center">Sign Up</h3>
                            <div class="form-outline mb-2">
                                <label class="form-label" for="typeEmailX-2">Email</label>
                                <input type="email" name="email" id="typeEmailX-2" class="form-control" />
                            </div>
                            <div class="form-outline mb-2">
                                <label class="form-label" for="typeEmailX-2">Nama</label>
                                <input type="name" name="name" id="typeEmailX-2" class="form-control" />
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="typePasswordX-2">Password</label>
                                <input type="password" name="password" id="typePasswordX-2" class="form-control" />
                            </div>
                            <button class="btn btn-primary w-100 btn-block" type="submit">Register</button>
                            <hr class="my-3">
                            <p class="text-center">Sudah mempunyai akun? <a class="text-decoration-none"
                                    href="/login">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
