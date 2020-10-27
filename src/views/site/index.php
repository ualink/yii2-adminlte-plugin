<?php
$this->title = 'Starter Page';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <?= \ualink\yii2-adminlte-plugin\widgets\Alert::widget([
                'type' => 'success',
                'body' => '<h3>Congratulations!</h3>',
            ]) ?>
            <?= \ualink\yii2-adminlte-plugin\widgets\Callout::widget([
                'type' => 'danger',
                'head' => 'I am a danger callout!',
                'body' => 'There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.'
            ]) ?>
        </div>
    </div>
</div>