<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM books WHERE id = '$id'");
$post = mysqli_fetch_assoc($query);

if(isset($_POST['title'])) {
    $title = $_POST['title'];
    $excerpt = $_POST['excerpt'];
    $description = $_POST['description'];
    $author_id = $_POST['author'];
    $category_id = $_POST['category'];

    mysqli_query($conn, "UPDATE books SET title='$title', excerpt='$excerpt', description=$description, author_id='$author_id', category_id = '$category_id' WHERE id='$id'");
    header("Location: /index.php?module=$module&action=read");
}
//File upload//
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
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
</form>
