<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Page</title>
 </head>
 <body>
     <form action="" method="post">
     <table>
     {{csrf_field()}}
      
       <tr>
           <td>Email</td>
           <td><input type="email" name="email" id=""></td>
       </tr>
       <tr>
           <td>Password</td>
           <td><input type="password" name="password" id=""></td>
       </tr>
       <tr>
           <td>Do you have a Account?</td>
           <td><a href="/login">Login</a></td>
       </tr>
       <tr>
           <td></td>
           <td><input type="submit" name="submit" value="Login" id=""></td>
       </tr>
     </table>
     </form>
 </body>
 </html>
 