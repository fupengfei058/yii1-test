<?php
$form=$this->beginWidget('CActiveForm', array(
    'id'=>'contestant-form',
    //'enableAjaxValidation'=>true,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
    'clientOptions'=>array('validateOnsubmit'=>true),
));
?>
    <style type="text/css">
        div .errerMessage{color:red;}
        label .required{color:red;}
    </style>
<?php //echo $form->testField($model,'verifyCode');?>
<?php //$this->widget('CCaptcha');?>

    <!--选手名称-->
<?php echo $form->labelEx($model,'contestantName');?>
<?php echo $form->textField($model,'contestantName');?>
<?php echo $form->error($model,'contestantName');?>
    <br>

    <!--电话-->
<?php echo $form->labelEx($model,'mobile');?>
<?php echo $form->textField($model,'mobile');?>
<?php echo $form->error($model,'mobile');?>
    <br>

    <!--性别-->
<?php echo $form->labelEx($model,'sex');?>
<?php  echo $form->radioButtonList($model,'sex',array(1=>'男',2=>'女'),array("separator"=>"&nbsp;"));?>
    <br>

    <!--图片-->
<?php //echo $form->labelEx($model,'picList');?>
<?php //echo CHtml::activeFileField($model,'picList'); ?>
<?php //echo $form->error($model,'picList'); ?>
    <br>

    <!--自我描述-->
<?php echo $form->labelEx($model,'desc');?>
<?php echo $form->textField($model,'desc');?>
<?php echo $form->error($model,'desc');?>
    <br>

    <!--提交-->
<?php echo CHtml::submitButton('提交');?>
<?php
$this->endWidget();
?>