<html>
 <head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
 </head>
 <body>
 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="padding: 15px; padding-bottom: 10px; width: 300px; border-radius: 5px;">
            <form role="form" method="post" action="index.php?o=1">
  <div class="form-group">
    <label for="email"><font color="black">Email address</font></label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="password"><font color="black">Password</font></label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
   </div>
<button type="submit" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" style="background:#1975FF;color:white;">Login</button>

</form>
          </ul>
        </li>
    </body>
    </html>