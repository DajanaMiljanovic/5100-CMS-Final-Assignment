<div class="nav">
    <ul>
        <?php
        $modules = scandir('modules');
        $current = (isset($_GET['module'])) ? $_GET['module'] : "posts";
        foreach ($modules as $module): ?>
            <?php if ($module != "." && $module != ".."): ?>
                <?php $class = ($module == $current) ? "active" : ""; ?>
                <li role="presentation" class="<?= $class ?>"><a href="/?module=<?= $module ?>&action=read"><?= ucfirst($module) ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>

    </ul>
</div>
</div>
</div>
<div class="container">
