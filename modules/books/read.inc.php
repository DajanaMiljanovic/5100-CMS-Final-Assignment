<div class="item">
    <div class="row">
        <?php
        $sql = "SELECT books.* ,authors.name, books.id 
                    FROM authors LEFT JOIN books 
                    ON authors.id=books.id ORDER BY authors.name";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($query)):
            ?>
            <div class="col-md-2">
                <div class="img-wrap">
                    <img src="img/book1.jpg" alt="" />
                </div>
            </div>
            <div class="col-md-10">
                <div class="details">
                    <h4><a href="javascript:;"><?= $row['title']; ?></a></h4>
                    <span class="author">
                                Author name:
                                <a href="javascript:;"><?= $row['name']; ?></a>
                            </span>
                    <span class="category">

                                Category:
                                <a href="javascript:;"></a>

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
        <?php endwhile; ?>
    </div>
</div>