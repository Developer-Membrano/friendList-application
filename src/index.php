<?php
    session_start();
    require '../database/databaseConnect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <title>Friend List</title>
</head>
<body>
            <div class="container mt-4">

            <?php include('messageIndicator.php'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Friend List
                                <a href="createFriendList.php" class="btn btn-primary float-end">Add Students</a>
                            </h4>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Surname</th>
                                        <th>Phone</th>
                                        <th>email</th>
                                        <th>school</th>
                                        <th>Info</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query = "SELECT * FROM friendlist";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $friends)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $friends['first_name']; ?></td>
                                                    <td><?= $friends['surname']; ?></td>
                                                    <td><?= $friends['phone']; ?></td>
                                                    <td><?= $friends['email']; ?></td>
                                                    <td><?= $friends['school']; ?></td>
                                                    <td>
                                                        <a href="viewFriendList.php?id=<?= $friends['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                        <a href="editFriendList.php?id=<?= $friends['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                        <form action="../database/controller/handleFriendList.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete_friend" value="<?=$friends['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "<h5> No Record Found </h5>";
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>