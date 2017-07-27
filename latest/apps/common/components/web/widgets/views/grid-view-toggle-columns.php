<?php defined('MW_PATH') || exit('No direct script access allowed');

/**
 * This file is part of the MailWizz EMA application.
 * 
 * @package MailWizz EMA
 * @author Serban George Cristian <cristian.serban@mailwizz.com> 
 * @link http://www.mailwizz.com/
 * @copyright 2013-2017 MailWizz EMA (http://www.mailwizz.com)
 * @license http://www.mailwizz.com/license/
 * @since 1.3.8.8
 */
?>

<?php echo CHtml::beginForm($this->saveRoute, 'POST', array('class' => 'btn-group', 'id' => 'grid-view-toggle-columns'));?>
    <input type="hidden" name="model" value="<?php echo $modelName;?>"/>
    <input type="hidden" name="controller" value="<?php echo $controller;?>"/>
    <input type="hidden" name="action" value="<?php echo $action;?>"/>
    <a href="#" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown"><?php echo Yii::t('app', 'Toggle columns');?> <span class="caret"></span></a>
    <ul class="dropdown-menu select-columns-dropdown">
        <li>
            <ul>
                <?php foreach ($columns as $column) { ?>
                <li><a href="javascript:;" data-value="<?php echo $column;?>"><input type="checkbox" name="columns[]" value="<?php echo $column;?>" <?php echo in_array($column, $dbColumns) ? 'checked' : '';?>/><span><?php echo $model->getAttributeLabel($column);?></span></a></li>
                <?php } ?>
            </ul>
        </li>
        <li class="divider"></li>
        <li><a class="text-center save-changes" href="javascript:;" onclick="$(this).closest('form').submit(); return false;"><?php echo Yii::t('app', 'Save changes');?></a></li>
    </ul>
<?php echo CHtml::endForm();?>
