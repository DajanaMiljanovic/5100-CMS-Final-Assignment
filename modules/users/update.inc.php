<?php

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
$post = mysqli_fetch_assoc($query);


if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    if (isset($_POST['password'])) {
        $password = md5($_POST['password']);
        mysqli_query($conn, "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$id'");
    } else {
        mysqli_query($conn, "UPDATE users SET name='$name', email='$email' WHERE id='$id'");
    }
    header("Location: /index.php?module=$module&action=read");
}
?>

<div class="add-new-wrap">
    <h4 class="d-inline">Add new user:</h4>
    <button type="submit" class="btn btn-primary js-add-new">Add new</button>
    <div class="add-new">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Password:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>
