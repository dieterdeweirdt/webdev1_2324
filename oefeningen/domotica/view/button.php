<?php
$class = ($button->status) ? 'active' : '';
?>
<a href="change.php?button_id=<?= $button->button_id; ?>&status=<?= $button->status ? '0' : '1'; ?>" class="<?= $class; ?>"><i class="fal fa-<?= $button->icon; ?>"></i> <span><?= $button->name; ?></span></a>