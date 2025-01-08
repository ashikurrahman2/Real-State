<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/custom-style.css" />
  </head>
  <body>
    <div class="container">
      <div class="left-side">
        <!-- <img src="./logo.png" alt="Hash Techie Logo" class="logo" /> -->
        <h2 class="logo"><i class="bx bxl-xing"></i> Hash Tag</h2>
        <div class="text-left-side">
          <h2>Join Us! <br><span>Create Your Account</span></h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, repellendus?</p>
        </div>
        <div class="social-icons">
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-gmail"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
      <div class="right-side">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <h1>Register</h1>

          <div class="input-box">
            <input
              type="text"
              name="name"
              placeholder="Full Name"
              required
              value="{{ old('name') }}"
            />
          </div>
          <div class="input-box">
            <input
              type="email"
              name="email"
              placeholder="Email"
              required
              value="{{ old('email') }}"
            />
          </div>
          <div class="input-box">
            <input
              type="password"
              name="password"
              placeholder="Password"
              required
            />
          </div>
          <div class="input-box">
            <input
              type="password"
              name="password_confirmation"
              placeholder="Confirm Password"
              required
            />
          </div>

          <button type="submit" class="btn">Register</button>

          <div class="register-link">
            <p>Already have an account? <a href="{{ route('login') }}">Login here!</a></p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
