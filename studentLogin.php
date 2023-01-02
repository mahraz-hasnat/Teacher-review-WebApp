<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>My Ewu Reviews</title>
</head>
<body>
    <div class="container">
        <center><h2>Login to give/see a review</h2></center><br><br>
        <form name="loginform" action="review.php" method="post" >
            
            <p><label for="email">Email</label></p>
            <p><input type="email" name="s_email" id="s_email"></p>
            
            <p><label for="pass">Password</label></p>
            <p><input type="password" name="s_pass" id="s_pass" maxlength="20"></p>

            <input type="submit" value="Login">
        </form>
        <br><br>
        <a href="studentregister.php"><button>Don't have an account? Register here</button></a>
        
    </div>
</body>
</html>