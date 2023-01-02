<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>Register form</title>
</head>
<body>
    <div class="container">
        <center><h3>Regiter Here</h3></center>
        <form name="register" action="InsertStudent.php" method="post" onsubmit="return validate_student()">
            
            <p><label for="name">Name</label></p>
            <p><input type="text" name="student_name" id="s_name" required></p>

            <p><label for="student_id">Student ID</label></p>
            <p><input type="text" name="student_id" id="s_id" required minlength="13" maxlength="13"></p>
            
            <p><label for="email">East West University mail</label></p>
            <p><input type="email" name="student_email" id="s_name" required minlength="27" maxlength="27"></p>

            <p><label for="password">Password </label></p>
            <p><input type="password" name="student_password" id="s_pass" required></p>

            <input type="submit" value="Register">

        </form>
    </div>

    <script src="js/script.js"></script>
</body>
</html>