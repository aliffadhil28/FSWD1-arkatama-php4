<?php
    session_start();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <form class="container w-25 mt-5" action="loginVal.php" method="POST">
        <h2>Login</h2>
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?php if (isset(
            $_COOKIE['email']
        )) {
            echo $_COOKIE['email'];
        } ?>">
        <label for="pass" class="form-label">Password</label>
        <input type="password" name="pass" id="pass" class="form-control"value="<?php if (isset(
            $_COOKIE['pass']
        )) {
            echo $_COOKIE['pass'];
        } ?>">
        <input type="checkbox" name="rm" id="rm" class="form-check-input ml-1">
        <label for="rm" class="form-check-label ml-4">Remember Me ?</label><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>