<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comaptible" content="IE-edge">
    <link rel="stylesheet " href="style.css">
    <title>registration form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="containerreg">
        <?php
        print_r($_POST);
        ?>
        <form action="register.php" metod="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>  
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>  
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>  
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>  
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>  
        </form>
    </div>    
</body>
</html>