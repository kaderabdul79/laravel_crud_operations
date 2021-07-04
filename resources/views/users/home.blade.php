<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Signup Page</title>
 </head>
 <body>
  <div>
      {{-- <!-- @csrf; --> --}}
      <h2>Welcome</h2>
      <hr>
      <h2><a href="">View My Profile</a></h2>
      <h2><a href="">Edit My Profile</a></h2>
      <h2><a href="">Delete My Profile</a></h2>
      <hr>
      <h2><a href="{{ route('home.createUser') }}">Create New User</a></h2>
      <h2><a href="">Logout</a></h2>
  </div>
 </body>
 </html>
 