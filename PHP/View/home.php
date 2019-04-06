<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="/View/Style/home.css">
</head>
<body>

    <header> <?php include './View/navbar.php'; ?> </header>

    <h1>Home Page</h1>

    <section>

        <?php echo '<pre>'; print_r($_SERVER); ?>
        
    </section>

</body>
</html>