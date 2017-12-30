<?php
use \yii\widgets\ActiveForm;
use \yii\helpers\Html;
?>

<h2>Formulário de Cadastro - Yii2</h2>
<hr>

<?php $form = ActiveForm::begin() ?>
    <?= $form->field($registerModel, 'name') ?>
    <?= $form->field($registerModel, 'email') ?>
    <?= $form->field($registerModel, 'age') ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar dados', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end() ?>