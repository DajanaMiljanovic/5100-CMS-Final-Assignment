<?php
if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    mysqli_query($conn, "INSERT INTO cauthors SET name='$name' bio='$bio'");
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>



