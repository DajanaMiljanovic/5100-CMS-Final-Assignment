<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM comments WHERE id = '$id'");
$post = mysqli_fetch_assoc($query);

if(isset($_POST['title'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_POST['users'];
    $product_id = $_POST['product'];

    mysqli_query($conn, "UPDATE comments SET title='$title', content='$content', user_id='$user_id', product_id = '$product_id' WHERE id='$id'");
    header("Location: /index.php?module=$module&action=read");
}
?>
<div class="add-new-wrap">
    <h4 class="d-inline">Add new comment:</h4>
    <button type="submit" class="btn btn-primary js-add-new">Add new</button>
    <div class="add-new">
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <input type="text" id="content" name="content" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM categories");
                    while($row = mysqli_fetch_assoc($query)):   ?>
                        <?php $selected = ($post['category_id'] == $row['id'])? "selected" : ""; ?>
                        <option value="<?= $row['id'] ?>" <?= $selected ?>><?= $row['title'] ?> </option>
                    <?php endwhile; ?>

                </select>
            </div>
            <div class="form-group">
                <label for="users">Author</label>
                <select name="users" id="users" class="form-control">
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM users");
                    while($row = mysqli_fetch_assoc($query)):   ?>
                        <?php $selected = ($post['user_id'] == $row['id'])? "selected" : ""; ?>
                        <option value="<?= $row['id'] ?>" <?= $selected ?>><?= $row['name'] ?> </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>