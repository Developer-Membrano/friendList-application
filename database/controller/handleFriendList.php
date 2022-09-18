<?php
session_start();
require '../databaseConnect.php';

if(isset($_POST['delete_friend']))
{
    $friend_id = mysqli_real_escape_string($con, $_POST['delete_friend']);

    $query = "DELETE FROM friendlist WHERE id='$friend_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Friend Deleted Successfully";
        header("Location: ../../src/index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Friend Not Deleted";
        header("Location: ../../src/index.php");
        exit(0);
    }
}

if(isset($_POST['update_friend']))
{
    $friend_id = mysqli_real_escape_string($con, $_POST['friend_id']);

    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $surname = mysqli_real_escape_string($con, $_POST['surname']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $school = mysqli_real_escape_string($con, $_POST['school']);

    $query = "UPDATE friendlist SET first_name='$first_name', surname=' $surname', phone='$phone', email='$email', school='$school' WHERE id=' $friend_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['messageIndicator'] = "Friend Updated Successfully";
        header("Location: ../../src/index.php");
        exit(0);
    }
    else
    {
        $_SESSION['messageIndicator'] = "Friend Not Updated";
        header("Location: ../../src/index.php");
        exit(0);
    }

}


if(isset($_POST['add_friend']))
{
    $firstName = mysqli_real_escape_string($con, $_POST['first_name']);
    $surname = mysqli_real_escape_string($con, $_POST['surname']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $friendAddress = mysqli_real_escape_string($con, $_POST['address']);
    $school = mysqli_real_escape_string($con, $_POST['school']);

    $query = "INSERT INTO friendlist (first_name,surname,phone,email,address,school) VALUES ('$firstName','$surname','$phone','$email','$friendAddress','$school')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['messageIndicator'] = "adding Friend Successfully";
        header("Location: ../../src/createFriendList.php");
        exit(0);
    }
    else
    {
        $_SESSION['messageIndicator'] = "friend Not Created";
        header("Location: ../../src/createFriendList.php");
        exit(0);
    }
}

?>