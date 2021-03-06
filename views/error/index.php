<?php
$this->pageTitle = Yii::app()->name . ' - ' . Yii::t('base', 'Error');
?>
<div class="container container-error">
    <div class="panel panel-default">
    	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/tc-flower.png">
        <div class="panel-heading">
            <?php echo Yii::t('base', "<strong>Oooops...</strong><br>"); ?> <?php echo Yii::t('base', "It looks like you may have<br> taken a wrong turn."); ?>
        </div>
        <div class="panel-body">

            <div class="error">
                <p><?php echo CHtml::encode($message); ?></p>
            </div>

            <hr>
            <a href="<?php echo Yii::app()->createUrl('//')?>" class="btn btn-primary"><?php echo Yii::t('base', 'Back to dashboard'); ?></a>
        </div>
    </div>
</div>