<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="gallery">
    <?php if ($arResult["ITEMS"]): ?>
    <div class="gallery-list">
        <?foreach ($arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_PHOTO_WORK"]["VALUE"] as $idPhoto):?>
        <a href="<?=CFile::GetPath($idPhoto) ?>" class="gallery-item">
            <div class="gallery-item-hover"><?=GetMessage("BUT")?></div>
            <img src="<?= CFile::GetPath($idPhoto) ?>" alt="alt">
        </a>
        <?endforeach;?>
    </div>
    <?endif;?>
</section>