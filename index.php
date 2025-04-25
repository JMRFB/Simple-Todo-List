<?php

require_once 'php/init.php';

// text db connection
// $con = new config();
// $con->con();
if(!empty($_GET['item'])){
    $insert = new insert($_GET['item']); //pass data to __construct
    if($insert->InsertTask()){
        echo "Insert Successfully";
    }else{
        echo "Insert Failed";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-dark">
    <div class="container-fluid p-3 flex justify-content-center ">
        <span class="text-light">Todo-List</span>
    </div>
    </nav>

    <div class="container d-flex flex-column">
        <form action="" method="GET" class="w-50 p-5 m-auto">
            <div class="row gap-3">
                <input class="form-control" type="text" name="item" placeholder="Insert task" required>
                <!-- <input class="form-control" type="text" placeholder=""> -->
                <button type="submit"class="btn btn-primary" name="">Submit</button>
            </div>
        </form>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Todo</th>
                    <th scope="col">status</th>
                    <th scope="col">action</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            $view = new view();
            $result = $view->ViewData();
            foreach ($result as $data):?>
                <tr>
                    <td><?= htmlspecialchars($data['item']) ?></td>
                    <td><?= htmlspecialchars($data['status']) ?></td>
                    <td>
                        <a href="" >Completed</a>
                        <a href="" >Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Todo</th>
                    <th scope="col">status</th>
                    <th scope="col">action</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            $view = new view();
            $result = $view->ViewCompletedData();
            foreach ($result as $data):?>
                <tr>
                    <td><?= htmlspecialchars($data['item']) ?></td>
                    <td><?= htmlspecialchars($data['status']) ?></td>
                    <td>
                        <a href="" >Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>