<?php
if(isset($_POST['title'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_POST['users'];
    $category_id = $_POST['category'];

    mysqli_query($conn, "INSERT INTO posts SET title='$title', content='$content', user_id='$user_id', category_id = '$category_id'");
    header("Location: /index.php?module=$module&action=read"); //redirekcija na read!
}
?>
<div class="add-new-wrap">
    <h4 class="d-inline">Add new user:</h4>
    <button type="submit" class="btn btn-primary js-add-new">Add new</button>
    <div class="add-new">
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM categories");
                    while($row = mysqli_fetch_assoc($query)):   ?>
                        <option value="<?= $row['id'] ?>"><?= $row['title'] ?> </option>
                    <?php endwhile; ?>

                </select>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <select name="users" id="users" class="form-control">
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM users");
                    while($row = mysqli_fetch_assoc($query)):   ?>
                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?> </option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>

        </form>
    </div>
</div>
</div>
</div>

