<?php
if(isset($_POST['title'])) {
    $title = $_POST['title'];
    mysqli_query($conn, "INSERT INTO categories SET title='$title'");
    header("Location: /index.php?module=$module&action=read");
}
?>


<div class="add-new-wrap">
    <h4 class="d-inline">Add new category:</h4>
    <button type="submit" class="btn btn-primary js-add-new">Add new</button>
    <div class="add-new">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>