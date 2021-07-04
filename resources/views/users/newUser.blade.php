<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Signup Page</title>
 </head>
 <body>
 <!-- @csrf; -->
     <form action="" method="post">
     <table>
     {{csrf_field()}}
       <tr>
           <td>Name</td>
           <td><input type="text" name="username" id=""></td>
       </tr>
       <tr>
           <td>Email</td>
           <td><input type="email" name="email" id=""></td>
       </tr>
       <tr>
           <td>Password</td>
           <td><input type="password" name="password" id=""></td>
       </tr>
       <tr>
           <td>Confirm Password</td>
           <td><input type="password" name="cpassword" id=""></td>
       </tr>
       <tr>
           <td>Address</td>
           <td><input type="text" name="address" id=""></td>
       </tr>
       <tr>
           <td>Do you have a Account?</td>
           <td><a href="/login">Login</a></td>
       </tr>
       <tr>
           <td></td>
           <td><input type="submit" name="submit" value="Signup" id=""></td>
       </tr>
     </table>
     </form>
     @foreach($errors->all() as $err)
     <h2>{{$err}}</h2>
     @endforeach
 </body>
 </html>
 