@extends('User.dashboard.user-dashboard-no-user')

@section('content')

    <head>
        <title>JogjaCar - Log In</title>
    </head>

    <style>
        .logo {
            width: 50%;
        }
    </style>

    <div class="container-details">
        {{-- <h1 class="fw-bold my-4 text-center">Log In</h1> --}}
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-flex col-sm-flex mt-2">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="row justify-content-center">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="logo">
                            </div>

                            @if (session('error'))
                                <div class="alert alert-danger mt-4">
                                    <b>Oopsie!</b> {{ session('error') }}
                                </div>
                            @endif

                            <form class="mt-4" method="POST" action={{ route('actionLogin') }}>
                                @csrf
                                <div class="mb-4">
                                    <label for="loginUsername" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="loginUsername" name="username">
                                </div>
                                <div class="mb-4">
                                    <label for="loginPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="loginPassword" name="password">
                                </div>
                                <div class="row">
                                    <a href="{{ url('/register') }}" class="text-primary text-center"
                                        style="text-decoration: underline;">Belum punya akun?</a>
                                </div>
                                <div class="row justify-content-center mt-4">
                                    <button type="submit" class="btn btn-primary px-4 fw-bold">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- <script>
        var loginUsername = document.getElementById('loginUsername');
        var loginPassword = document.getElementById('loginPassword');
        var loginButton = document.getElementById('loginButton');

        function login() {
            if (loginUsername.value === 'Admin1' && loginPassword.value === 'Admin1') {
                loginButton.href = "{{ url('/landing-page-admin') }}";
            } else if (loginUsername.value === 'User1' && loginPassword.value === 'User1') {
                loginButton.href = "{{ url('/landing-with-user') }}";
            }
            return;
        }

        loginButton.addEventListener('click', login);
    </script> --}}
@endsection
