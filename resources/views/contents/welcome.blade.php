<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  {{-- <title>MoU - {{ $title }}</title> --}}

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Boxicons -->
  <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>

  <div class="containers">
    <div class="box">
      <div class="box-content">

        <!-- Sign In Form -->
        <form action="/masuk" method="POST" class="sign-in-form">
          @csrf
          <h2 class="title">Sign In</h2>
          <div class="input-field">
            <i class="bx bxs-user"></i>
            <input type="text" name="user" placeholder="Username">
          </div>
          <div class="input-field">
            <i class="bx bxs-lock"></i>
            <input type="password" name="pass" placeholder="Password">
          </div>
          <input type="submit" value="sign in" class="btns solid">
        </form>

        <!-- Sign Up Form -->
        <form action="/daftar" method="POST" class="sign-up-form">
          @csrf
          <h2 class="title">Sign Up</h2>
          <div class="input-field">
            <i class="bx bxs-user"></i>
            <input type="text" name="username" placeholder="Username">
          </div>
          <div class="input-field">
            <i class="bx bxs-phone"></i>
            <input type="text" name="phone_number" placeholder="Phone Number">
          </div>
          <div class="input-field">
            <i class="bx bxs-lock"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
          <input type="submit" value="sign up" class="btns solid">
        </form>
      </div>

      <!-- Panel -->
      <div class="panel-container">
        <!-- Sign Up Panel  -->
        <div class="panel left-panel">
          <div class="content">
            <h3>Don't Have Account ?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, Minus impedit quidem quibusdam</p>
            <button class="btns transparent" id="sign-up-btn">Sign Up</button>
          </div>
        </div>
        <!-- Sign In Panel -->
        <div class="panel right-panel">
          <div class="content">
            <h3>Already Have Account ?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, Minus impedit quidem quibusdam</p>
            <button class="btns transparent" id="sign-in-btn">Sign In</button>
          </div>
        </div>
      </div>
      <!-- Panel End -->
    </div>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>