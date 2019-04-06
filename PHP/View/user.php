<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" href="/View/Style/user.css">
</head>
<body>

    <header> <?php include './View/navbar.php'; ?> </header>

    <h1>User Page</h1>

    <div id="reg-container">

        <form action="/FakeDB/requests.php" method="post">

            <fieldset><br>

                <legend>Register</legend>

                <label for="username">Username</label><br><br>
                <input type="text" name="username" id="username" placeholder="Username"><br><br>

                <label for="password">Password</label><br><br>
                <input type="password" name="password" id="password" placeholder="Password"><br><br>

                <label for="email">E-mail</label><br><br>
                <input type="email" name="email" id="email" placeholder="E-mail"><br><br>
                
                <input type="submit" value="Register">

            </fieldset>

        </form> 

    </div>



</body>
</html>