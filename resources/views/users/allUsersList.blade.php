<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Details All Users</title>
 </head>
 <body>
     <table border="1">
       </tr>
       <tr>
           <th>Username</th>
           <th>Email</th>
           <th>Address</th>
           <th>Action</th>
       </tr>
       @foreach ($alluserlist as $user)
           
       
       <tr>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->address}}</td>
           <td><a href="">View</a> | <a href="">Update</a> | <a href="">Delete</a></td>
       </tr>
       @endforeach
     </table>
 </body>
 </html>
 