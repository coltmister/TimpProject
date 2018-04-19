<?php

/* @var $this yii\web\View */

$this->title = 'Show';

?>

<?php foreach ($codes as $code):?>
        <div>
            <?= $code['id']?><br>
            <iframe  src='../../../modules/coder/src/<?= $code['link']?>'></iframe>

            <div class="well">
                <?php
                    $fp = fopen('../modules/coder/src/'.$code['link'], 'rt');
                    while (!feof($fp))
                        echo htmlentities(fgets($fp), ENT_QUOTES).'<br>';
                    fclose($fp);
                ?>
            </div class="well">
        </div>
<?php endforeach;?>
