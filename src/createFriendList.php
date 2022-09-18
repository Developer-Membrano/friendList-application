<?php
    session_start();
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
    
<div class="container mt-5">

            <?php include('messageIndicator.php'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Friend
                                <a href="index.php" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="../database/controller/handleFriendList.php" method="POST">

                                <div class="mb-3">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Surname</label>
                                    <input type="text" name="surname" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Phone no.</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>address</label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>School</label>
                                    <input type="text" name="school" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="add_friend" class="btn btn-primary">add friend</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>