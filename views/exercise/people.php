<?php
    use yii\widgets\LinkPager;
?>
<h1>Pessoas</h1>
<hr>

<ul>
    <?php foreach($people as $person) : ?>
        <li>
            <?= $person->name . ' ' . $person->email ?><br>
            <small><?= $person->city . ' (' . $person->state . ')'?></small>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>