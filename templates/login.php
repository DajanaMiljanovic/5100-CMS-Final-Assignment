<?php
if(isset($_POST['submitted'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    $result = mysqli_fetch_assoc($query);
    if ($result) {
        $_SESSION['user'] = $result;
        header('Location: /');
    } else {
        echo "Not valid credentials";
    }
}
?>
<h1 class="page-title">Log In</h1>
<div class="row">
    <div class="col-md-8">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" id="email" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" class="form-control" />
            </div>
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-primary js-add-new">Login</button>
            </div>
        </form>
    </div>
</div>
