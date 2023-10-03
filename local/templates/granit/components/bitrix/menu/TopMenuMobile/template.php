<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if (!empty($arResult)): ?>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <?php foreach ($arResult as $item): ?>
                <li class="menu_mm"><a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php endif; ?>