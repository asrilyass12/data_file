<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="row">
    <form action="index.php" method="POST">
    <div class="mb-3 col-lg-2">
        <label class="form-label">name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3 col-lg-2">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3 col-lg-2">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="pass">
    </div>
    <input type="submit" class="btn btn-primary" value="login" name="sent">
    </form>
</div>
    <?php
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $user = $name . "\n" . $email . "\n" . $pass;

        $handelfile = fopen("login_data.txt", "a+");
        $write = fwrite($handelfile , $user);
            


    
    
    ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>