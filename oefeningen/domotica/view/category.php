<?php
$class = ($current_category == $category->category_id) ? 'active' : '';
?>
<a href="index.php?category_id=<?= $category->category_id; ?>" class="<?= $class; ?>"><i class="fal fa-<?= $category->icon; ?>"></i> <span><?= $category->name; ?></span></a>
