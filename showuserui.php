 <?php 
include "./logicPHP/showuser.php";
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">
<h1 class="m-5">show user</h1>
<h2>name</h2>
<p><?php echo $users['user_name']?></p>
<h2>email</h2>
<p><?php echo $users['user_email']?></p>
<h2>gender</h2>
<p><?php echo $users['user_gender']?></p>
<h2>mail state</h2>
<p><?php echo $users['user_receive']?></p>
<a type="button" class="btn btn-success m-5" href="./index.php">back</a> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</body>
</html>