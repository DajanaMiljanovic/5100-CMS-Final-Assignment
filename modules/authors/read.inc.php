<div class="col-md-3">
    <div class="img-author">
        <img src="img/author.jpg" alt="" />
    </div>
    <?php
    $sql = "SELECT * FROM authors";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)):
    ?>
    <p><?= $row['bio']; ?></p>
</div>
    <div class="item">
        <div class="row">
            <div class="col-md-2">
                <div class="img-wrap">
                    <img src="img/book1.jpg" alt="" />
                </div>
            </div>
            <div class="col-md-10">
                <div class="details">
                    <h4><a href="javascript:;"><?= $row['btitle']; ?></a></h4>
                    <span class="author">
                        Author name:
                        <a href="javascript:;" class="author"><?= $row['name']; ?></a>
                    </span>
                    <?php $i = $row['accessibility'];//available
                    if ($i == 0) {
                        echo "<span class=\"is-available no\">Not available</span>";
                    } else {
                        echo "<span class=\"is-available yes\">Available</span>";
                    } ?>
                    <p><?= $row['excerpt']; ?></p>
                    <a href="javascript:;">Read more...</a>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>