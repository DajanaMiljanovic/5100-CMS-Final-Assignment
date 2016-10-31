<div class="row">
    <div class="col-md-8">
        <table class="table table-striped">
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Remove</td>
            </tr>
            <?php
            $sql = "SELECT * FROM user";
            $query = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($query)):
            ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['email']; ?></td>
                <td>
                    <a href="/index.php?module=<?= $module ?>&action=update&id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a> <a href="/index.php?module=<?= $module ?>&action=delete&id=<?= $row['id']; ?>" class="btn btn-danger">Delete user</a>
                </td>
            </tr>

            <?php endwhile; ?>
        </table>

        <div class="add-new-wrap">
            <h4 class="d-inline">Add new user:</h4>
<!--            <button type="submit" class="btn btn-primary js-add-new">Add new</button>-->
            <a href="/index.php?module=<?= $module ?>&action=create" class="btn btn-primary js-add-new">Add new</a>
            <div class="add-new">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>