
<!DOCTYPE html>
<html>

<head>
  <title>Admin Login</title>
  <!-- meta_tags-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords"
    content="connective login form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
  <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); }
  </script>
  <!-- Meta_tag_Keywords -->
  <link href="{{ asset('') }}backend/css/style.css" rel="stylesheet" type="text/css" media="all">
  <!--style_sheet-->
  <link href="{{ asset('') }}backend/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  <!--font_awesome_icons-->
  <!--web_fonts-->
  <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext"
    rel="stylesheet">
  <!--//web_fonts-->
</head>

<body>
  <div class="form">
    {{-- <h1>Connective Login Form</h1> --}}
    <div class="form-content">
      {{-- <form action="#" method="post"> --}}
        {{ Form::open(['route'=>'login']) }}
        <div class="form-info">
          <h2>Login</h2>
        </div>
        <div class="email-w3l">
          <span class="i1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
          <input class="email" type="email" name="email" placeholder="Email" required="">
        </div>
        <div class="pass-w3l">
          <!---728x90--->
          <span class="i2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
          <input class="pass" type="password" name="password" placeholder="Password" required="">
        </div>
        <div class="form-check">
          <div class="left">
            <input type="checkbox" value="Remember me" id="remember" {{ old('remember') ? 'checked' : '' }} >Remember me
          </div>
          <div class="right">
            <a href="#">Forgot Password?</a>
          </div>
          <div class="clear"></div>
        </div>
        <div class="submit-agileits">
          <input class="login" type="submit" value="login">
        </div>
        <div class="right">
            <a href="{{ route('register') }}">New Signup?</a>
        </div>
      {{-- </form> --}}
      {{ Form::close() }}

    </div>
  </div>
  <!---728x90--->
  {{--  <footer>&copy; 2020 All rights reserved | Design by <a href="#">Electron</a></footer>  --}}
  <!---728x90--->
</body>

</html>