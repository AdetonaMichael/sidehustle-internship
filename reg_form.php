<?php
  $email = $_POST['email'];
  $password = $_POST['password'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <div class="row">
           <div class="col-md-8">
           <form method="post" action="" class="m-5 style=" style="border: 3px solid black; margin-top:100px solid black; padding:100px;">
       <div class="form-group">
           <label for="email">Enter Email </label>
           <input type="text" class="form-control" name="email" id="myemail" required>
       </div>

       <div  class="form-group">
           <label for="password"> Enter Password </label>
           <input type="password"  class="form-control" name="password" id="password" required>
       </div>

       <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Submit">
       </div>
    </form>
           </div>
       </div>
    </div>
       
       <h2 class="m-5 text-center"><?php echo "the emil is: ".$email."  and the password is:".$password; ?> </h2>
</body>
</html>