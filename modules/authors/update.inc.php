<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM authors WHERE id = '$id'");
$post = mysqli_fetch_assoc($query);

if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $bio = $_POST['bio'];

    mysqli_query($conn, "UPDATE books SET title='$title', excerpt='$excerpt', description=$description, author_id='$author_id', category_id = '$category_id' WHERE id='$id'");
    header("Location: /index.php?module=$module&action=read");
}
?>
<div class="add-new-wrap">
    <h4 class="d-inline">Add new book:</h4>
    <button type="submit" class="btn btn-primary js-add-new">Add new</button>
    <h1 class="page-title"><?= $row['name']; ?></h1>
    <div class="row">
        <div class="add-new">
            <div class="col-md-3">
                <div class="img-author">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="file">Upload file:</label>
                            <input type="file" name="file">
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <p><?= $row['bio']; ?></p>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
