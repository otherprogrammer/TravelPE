@extends('layouts.app')

@section('content')
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <!-- Formulario de Registro -->
      <div class="col-md-6 text-black">
        <div class="px-5 ms-xl-4">
          <i class="fas fa-user-plus fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Registrarse</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
          <div class="card w-100">
            <div class="card-header text-center">{{ __('Registrate con tus datos') }}</div>

            <div class="card-body">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">{{ __('Nombres completos y Apellidos') }}</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">{{ __('GMAIL') }}</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-info">{{ __('Registrarse') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Imagen de Fondo -->
      <div class="col-md-6 d-none d-md-block">
        <img src="https://media.revistagq.com/photos/5ed5285ef95b900ced636e6d/1:1/w_4016,h_4016,c_limit/GettyImages-619394704.jpg"
          alt="Register image" class="w-100 vh-100" style="object-fit: cover;">
      </div>
    </div>
  </div>
</section>
@endsection
