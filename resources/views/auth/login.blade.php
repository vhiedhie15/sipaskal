@extends('layouts.login')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('home')}}">
            <img src="{{ url('img/logo/380px-Lambang_Kabupaten_Landak.png') }}" alt="Logo Kab Landak" style="width:150px;">
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"><b>Sistem Informasi Pengelolaan Arsip Surat Kab Landak</b></p>
  
        <form action="{{ route('login') }}" method="post">
        @csrf
          <div class="input-group mb-3">
            <input id="email" type="email" class="form-control {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('username') ?: old('email') }}" required autofocus placeholder="Email or Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @if ($errors->has('username') || $errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="row">
            <div class="col-8">
                <a href="forgot-password.html">Saya lupa kata sandi</a>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->



@endsection
