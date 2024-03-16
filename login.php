<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comaptible" content="IE-edge">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet " href="style.css">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="containerreg">
        <?php
        print_r($_POST);
        ?>
        <form action="login.php" metod="post">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter Email:">
            </div>  
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter Password:">
            </div>  
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Login" name="submit">
            </div>  
        </form>
    </div>    
</body>
</html>