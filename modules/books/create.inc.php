<?php
if(isset($_POST['title'])) {
    $title = $_POST['title'];
    $excerpt = $_POST['excerpt'];

    mysqli_query($conn, "INSERT INTO books SET title='$title', excerpt='$excerpt'");
    header("Location: /index.php?module=$module&action=read");
}
//
$globalPath = $_SERVER["DOCUMENT_ROOT"] .'/';
$galleryPath = $globalPath . 'public/img/';

if(isset($_FILES['file'])){
    echo '<pre>';
    $f = $_FILES['file'];
    $fileName = 'img.jpg';
    if(move_uploaded_file($f['tmp_name'], $galleryPath.$fileName)) {
        echo 'file is uploaded';
    } else{
        echo 'file is NOT uploaded';
    }
}
?>
<div class="add-new-wrap">
    <h4 class="d-inline">Add new book:</h4>
    <button type="submit" class="btn btn-primary js-add-new">Add new</button>
    <div class="add-new">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="excerpt">Excerpt:</label>
                <input type="text" id="excerpt" name="excerpt" class="form-control">
            </div>
            <div class="form-group">
                <label for="file">Upload file:</label>
                <input type="file" name="file">
            </div>
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
