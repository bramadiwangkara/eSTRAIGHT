<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
  <title>eStraight PLN</title>
</head>
<body>
  <div class="nav_index">
    <div class="login">
      <form action="{{ route('login') }}" method="POST" class="login_form">
        @csrf
        <input type="text" name="nip" id="uid" placeholder="Nomor Pegawai" required autofocus/>
        <input type="password" name="password" id="upass" placeholder="Password" required=""/>
        <button type="submit" id="login_button">LOGIN</button>
      </form>
    </div>
    <img src="{{ asset('img/logo-header.jpg') }}" alt="" id="logo_header">
  </div>
  <div class="content">
    <div class="logo_name">
      <img src="{{ asset('img/Logo_PLN.png') }}" alt="" id="logo_body">
      <span>eStraight</span>
    </div>
  </div>
</body>
</html>

<!-- <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nip" class="col-sm-4 col-form-label text-md-right">{{ __('NIP') }}</label>

                            <div class="col-md-6">
                                <input id="nip" type="nip" class="form-control{{ $errors->has('nip') ? ' is-invalid' : '' }}" name="nip" value="{{ old('nip') }}" required autofocus>

                                @if ($errors->has('nip'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div> -->
