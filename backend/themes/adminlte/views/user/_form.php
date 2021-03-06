<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\lib\enum\EnumUser;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $roles yii\rbac\Role[] */
/* @var $permissions yii\rbac\Permission[] */
?>

<div class="user-form">


        <?php $form = ActiveForm::begin([
            'layout' => 'horizontal',
            'enableAjaxValidation'   => true,
            'enableClientValidation' => false,
            'fieldConfig' => [
                'horizontalCssClasses' => [
                    'wrapper' => 'col-sm-9',
                ],
            ],
        ]); ?>
        <?php echo $form->field($model, 'email') ?>
        <?php echo $form->field($model, 'type')->dropDownList(EnumUser::getAll(EnumUser::TYPE)) ?>
        <?php echo $form->field($model, 'status')->dropDownList(EnumUser::getAll(EnumUser::STATUS)) ?>
        <div class="form-group">
            <?php echo Html::submitButton(Yii::t('backend', 'Save'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>