<?php

/* @var $this yii\web\View */

$this->title = 'Show';

?>

<?php foreach ($codes as $code):?>
    <div>
            <?= $code['id']?><br>
            <iframe src='../modules/coder/src/<?= $code['link']?>'></iframe>
            <div>
                <?php
                    $fp = fopen('../modules/coder/src/'.$code['link'], 'rt');
                    echo '<code>'.htmlspecialchars(fgets($fp), ENT_QUOTES).'</code>';
                ?>
            </div>
    </div>
<?php endforeach;?>
