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
<?php if ($arResult["ITEMS"]): ?>
    <div class="gallery">
        <div class="gallery_image" style="background-image:url(<?=CFile::GetPath($arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_BACKGROUND"]["VALUE"]) ?>)"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="gallery_title text-center">
                        <ul>
                            <li><a href="#">#<?=$arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_TAGS"]["VALUE"]["0"]?></a></li>
                            <li><a href="#">#<?=$arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_TAGS"]["VALUE"]["1"]?></a></li>
                            <li><a href="#">#<?=$arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_TAGS"]["VALUE"]["2"]?></a></li>
                        </ul>
                    </div>
                    <div class="gallery_text text-center"><?=$arResult["ITEMS"]["0"]["PREVIEW_TEXT"]?></div>
                    <div class="button gallery_button">
                        <a href="<?=$arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_LINK"]["VALUE"]?>">
                            <?= $arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_TEXT_LINK"]["VALUE"]?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery_slider_container">
            <!-- Gallery Slider -->
            <div class="owl-carousel owl-theme gallery_slider">
                <!-- Gallery Item -->
                <?foreach ($arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_PHOTO_WORK"]["VALUE"] as $idPhoto):?>
                    <div class="owl-item gallery_item">
                        <a class="colorbox" href="<?=CFile::GetPath($idPhoto) ?>">
                            <img src="<?=CFile::GetPath($idPhoto) ?>" alt="">
                        </a>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
<?php endif;?>




