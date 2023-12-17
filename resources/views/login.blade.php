@extends('layouts.headerFooter')

@section('content')
    <section class="vh-100" style="background-color: #EEF0E5;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            @if (Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session()->get('error') }}
                                </div>
                            @endif
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <h3 class="mb-5 text-center">Sign in</h3>
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    <input type="email" name="email" id="typeEmailX-2" class="form-control" />
                                </div>
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control" />
                                </div>
                                <button name="submit" class="btn btn-primary w-100 btn-block" type="submit">Login</button>
                                <hr class="my-3">
                                <p class="text-center">Belum mempunyai akun?<a class="text-decoration-none"
                                        href="/register"> Register</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
