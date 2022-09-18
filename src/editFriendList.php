<?php
    session_start();
    require '../database/databaseConnect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('messageIndicator.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Friend
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $friend_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM friendlist WHERE id='$friend_id'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $friend = mysqli_fetch_array($query_run);
                                ?>
                                <form action="../database/controller/handleFriendList.php" method="POST">
                                    <input type="hidden" name="friend_id" value="<?= $friend['id']; ?>">

                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" value="<?=$friend['first_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Surname</label>
                                        <input type="text" name="surname" value="<?=$friend['surname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="<?=$friend['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$friend['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>School</label>
                                        <input type="text" name="school" value="<?=$friend['school'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_friend" class="btn btn-primary">
                                            Update Friend
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>