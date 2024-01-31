<?php
 include("./function/validation.php") ;
include "./logicPHP/displayusers.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class=" container">
    <div class="row m-5 ">
        <h1 class="col-10">user details</h1>
        <a href="./addnewuserui.php" class="col-2"> <button type="button" class="btn btn-outline-primary">add new user</button></a>
    </div>
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">gender</th>
                <th scope="col">mail state</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($users); $i++) {
            ?>
                <tr>
                    <td scope="row"><?php
                                    $id = $users[$i]['user_id'];
                                    echo $id; ?>
                    </td>
                    <td><?php
                        echo $users[$i]['user_name']; ?></td>
                    <td><?php
                        echo $users[$i]['user_email']; ?></td>
                    <td><?php
                        echo $users[$i]['user_gender']; ?></td>
                    <td><?php
                        echo $users[$i]['user_receive']; ?></td>
                    <td> <a type="button" class="btn btn-primary" href="<?php echo "./showuserui.php?id=$id"
                                                                        ?>">open</a>
                        <a type="button" class="btn btn-success " href="<?php echo "./updateuser.php?id=$id"
                                                                        ?>">edit</a>
                        <a type="button" class="btn btn-danger  " href="<?php echo "./delateuser.php?id=$id"
                                                                        ?>" >delete</a>
                    </td>
                </tr>
            <?php
            };
            ?>
        </tbody>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>