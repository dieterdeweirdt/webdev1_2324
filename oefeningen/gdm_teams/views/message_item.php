<?php 
    if($message->user_id == 7) {
        $is_my = 'my';
    } else {
        $is_my = '';
    }
    //$is_my = ($message->user_id == 7) ? 'my' : '';
?>
<div class="message <?= $is_my ?>">
    <div class="name"><?= $message->firstname . ' ' . $message->lastname ?></div>
    <div class="text">
        <?= $message->message ?>
    </div>
    <div class="date"><?= $message->created_on ?></div>
</div>