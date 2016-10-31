<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM categories WHERE id = '$id'");
$post = mysqli_fetch_assoc($query);

if(isset($_POST['title'])) {
    $title = $_POST['title'];
    mysqli_query($conn, "UPDATE categories SET title='$title' WHERE id='$id'");
    header("Location: /index.php?module=$module&action=read");
}
?>

<div class="add-new">
    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group pull-right">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
