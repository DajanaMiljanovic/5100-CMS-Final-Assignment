
    <?php
    $sql = "SELECT * FROM categories";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)):
    ?>
    <ul class="category-list">
        <li><a href="javascript:;"><?= $row['title']; ?></a></li>
        <?php endwhile; ?>
    </ul>

    <h1 class="page-title">Users</h1>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>

                <?php
                $sql = "SELECT comments.*, users.name as 'author', categories.title as 'category' FROM comments 
                        LEFT JOIN users ON posts.user_id = users.id 
                        LEFT JOIN categories ON comments.category_id = categories.id 
                        ORDER BY id DESC";
                $query = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($query)):
                    ?>
                    <tr>
                        <td><?= $row['title']; ?></td>
                        <td><?= $row['author']; ?></td>
                        <td><?= $row['category']; ?></td>
                        <td><?= date("d. F Y H:i", strtotime($row['date'])); ?></td>
                        <td>
                            <a href="/index.php?module=<?= $module ?>&action=update&id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="/index.php?module=<?= $module ?>&action=delete&id=<?= $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>