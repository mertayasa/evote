<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Email</title>
  </head>
  <body>
    <h2>Welcome to the site {{Auth::user()->name}}</h2>
    <br/>
    Your registered email-id is {{Auth::user()->email}} , <br> Please click on the below link to verify your email account
    <br/>
    <a href="{{url('/sentemail/showverifypledge')}}">Verify Email</a>
  </body>
</html>