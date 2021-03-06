<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kategori */

$this->title = $model->id;
$subtitle = 'Detail '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-view">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($subtitle) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('Ubah', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Anda yakin ingin menghapus item ini?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
        <div class="box-body">
             <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_kategori',
        ],
    ]) ?>
        </div>
    </div>
    

</div>
