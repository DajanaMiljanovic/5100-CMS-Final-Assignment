<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale = 1.0" />
    <title>Category</title>
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/public/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
</head>
<body>
<div class="header">
    <div class="container">
        <div class="nav">
            <ul>
                <li>
                    <?php
                    $modules = scandir('modules');
                    $current = (isset($_GET['module'])) ? $_GET['module'] : "posts";
                    foreach ($modules as $module): ?>
                        <?php if ($module != "." && $module != ".."): ?>
                        <?php $class = ($module == $current) ? "active" : ""; ?>
                        <li role="presentation" class="<?= $class ?>">
                            <a href="/?module=<?= $module ?>&action=read"><?= ucfirst($module) ?></a>
                        </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">


<!--    <li><a href="index.php">Home</a></li>-->
<!--    <li><a href="products.html">Products</a></li>-->
<!--    <li><a href="category.html">Category</a></li>-->
<!--    <li><a href="users.html">Users</a></li>-->