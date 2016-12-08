<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name;
?>
<div class="hero-unit">
    <h1>
        欢迎 ！
    </h1>

    <p>
        测试成功！
    </p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
            'type'=>'primary',
            'size'=>'large',
            'label'=>'更多 »',
            //'url'=>array('/site/page', 'view'=>'about')
        )); ?>
    </p>
</div>
