<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/custom-style.css" />
  </head>
  <body>
    <div class="container">
      <div class="left-side">
        <h2 class="logo"><i class="bx bxl-xing"></i> Hash Tag</h2>
        @foreach($abouts as $about)
        <div class="text-left-side">
          <h2>Welcome! <br /><span style="font-size: 30px;">To Our {{$about->title}} !</span></h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, repellendus?</p>
        </div>
        @endforeach
        <div class="social-icons">
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-gmail"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
      <div class="right-side">
        @if (session('error'))
          <div class="error-message" style="color: red; margin-bottom: 10px;">
            {{ session('error') }}
          </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h1>Login</h1>

          <!-- Email Input -->
          <div class="input-box">
            <input
              type="email"
              name="email"
              placeholder="Email"
              required
              value="{{ old('email') }}"
            />
            @error('email')
              <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
            @enderror
          </div>

          <!-- Password Input -->
          <div class="input-box">
            <input
              type="password"
              name="password"
              placeholder="Password"
              required
            />
            @error('password')
              <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
            @enderror
          </div>

          <!-- Remember Me & Forgot Password -->
          <div class="remember-forgot">
            <label>
              <input type="checkbox" name="remember" /> Remember me
            </label>
            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">Forgot password?</a>
            @endif
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn">Login</button>

          <!-- Register Link -->
          <div class="register-link">
            <p>Don't have an account? <a href="{{ route('register') }}">Register here!</a></p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
