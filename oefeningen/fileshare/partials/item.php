<?php
    $icon = is_dir("$upload_dir/$item") ? 'fa-folder' : 'fa-file';
    //if( strpos($item, $search) !== false ) {}
?>
<div>
    <a href="?folder=my_folder">
        <i class="fa <?= $icon; ?> fa-fw"></i> 
        <?= $item; ?>
    </a>
</div>
<div>size</div>
<div>7/10/2023 10:48</div>