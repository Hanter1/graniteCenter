<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if (!empty($arResult)): ?>
    <nav class="main_nav">
        <ul>
            <?php foreach ($arResult as $item): ?>
                <li><a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php endif; ?>