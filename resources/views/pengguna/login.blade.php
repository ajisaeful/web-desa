<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

   
    
    <!-- Custom styles for this template -->
   
  </head>
  
  <body class="text-center">
    <div class="row justify-content-center">
        <div class="col-md-3">
          

        @if(session()->has('loginerror'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{session('loginerror')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
        </div>
        @endif

    <main class="form-signin w-100 m-auto">
    <img class="mt-5" src="{{asset('slide/balai.jpg')}}" alt="" width="200" height="150">
    <h1 class="h3 mt-2 mb-3 fw-normal">Silahkan login</h1>
    <form action="/postlogin" method="post">
      @csrf
    <div class="form-floating">
      <input type="email" name="email" class="form-control mb-1 @error('email') is-invalid @enderror" id="email"
      placeholder="name@example.com" autofocus require value="{{old('email')}}">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control mb-3 " id="password" placeholder="Password">
      <label for="password" require>Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
    
  </form>
</main>           
        </div>
    </div>


    
  </body>
</html>
