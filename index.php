<?php

require_once 'php/init.php';

InsertData();
DeleteData();
UpdateData();

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
        <a href="index.php" class="text-decoration-none"><span class="text-light">Todo-List</span></a>
    </div>
    </nav>

    <div class="container d-flex flex-column">
        <form action="" method="GET" class="w-100 p-5 m-auto">
            <div class="row gap-3 flex justify-content-center">
            <?php if (!empty($message)): ?>
                <div class="alert alert-<?php echo $alert; ?> alert-dismissible fade show mt-3" role="alert">
                    <?= htmlspecialchars($message) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
                <input class="form-control w-75" type="text" name="item" placeholder="Insert task" required>
                <button type="submit" class="btn btn-primary w-75" name="">Submit</button>
            </div>
        </form>
    
        <table class="border table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Todo</th>
                    <th scope="col">Date Completed</th>
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
                    <td><?= htmlspecialchars($data['date_added']) ?></td>
                    <td><?= htmlspecialchars($data['status']) ?></td>
                    <td>
                        <a href="index.php?Edit=<?php echo $data['id'];?>" class="btn btn-primary text-white">Completed</a>
                        <a href="index.php?Delete=<?php echo $data['id'];?>" class="btn bg-danger text-white">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <table class="border table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Todo</th>
                    <th scope="col">Date Completed</th>
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
                    <td><?= htmlspecialchars($data['date_completed']) ?></td>
                    <td>
                        <a href="index.php?Delete=<?php echo $data['id'];?>" class="btn bg-danger text-white">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>