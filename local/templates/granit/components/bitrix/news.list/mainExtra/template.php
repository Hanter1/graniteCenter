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
$caunt = 0;
?>
<?php if ($arResult["ITEMS"]): ?>
    <div class="extra clearfix">
        <div class="extra_promo extra_promo_1">

            <div class="extra_promo_image" style="background-image:url(<?=$arResult["ITEMS"]["0"]["PREVIEW_PICTURE"]["SRC"]?>)"></div>
            <div class="extra_1_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="extra_1_price"><?=$arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_PRICE"]["VALUE"]?><span>off</span></div>
                <div class="extra_1_title"><?=$arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_TITLE"]["VALUE"]?></div>
                <div class="extra_1_text"><?=$arResult["ITEMS"]["0"]["PREVIEW_TEXT"]?></div>
                <div class="button extra_1_button"><a href="<?=$arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_LINK"]["VALUE"]?>"><?=$arResult["ITEMS"]["0"]["PROPERTIES"]["ADD_LINK_TEXT"]["VALUE"]?></a></div>
            </div>
        </div>
        <div class="extra_promo extra_promo_2">
            <div class="extra_promo_image" style="background-image:url(<?=$arResult["ITEMS"]["1"]["PREVIEW_PICTURE"]["SRC"]?>)"></div>
            <div class="extra_2_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="extra_2_title">
                    <div class="extra_2_center"><?=$arResult["ITEMS"]["1"]["PROPERTIES"]["ADD_EXTRA_CENTER"]["VALUE"]?></div>
                    <div class="extra_2_top"><?=$arResult["ITEMS"]["1"]["PROPERTIES"]["ADD_EXTRA_TOP"]["VALUE"]?></div>
                    <div class="extra_2_bottom"><?=$arResult["ITEMS"]["1"]["PROPERTIES"]["ADD_EXTRA_BOTTOM"]["VALUE"]?></div>
                </div>
                <div class="extra_2_text"><?=$arResult["ITEMS"]["1"]["PREVIEW_TEXT"]?></div>
                <div class="button extra_2_button"><a href="<?=$arResult["ITEMS"]["1"]["PROPERTIES"]["ADD_LINK"]["VALUE"]?>"><?=$arResult["ITEMS"]["1"]["PROPERTIES"]["ADD_LINK_TEXT"]["VALUE"]?></a></div>
            </div>
        </div>
    </div>
<?php endif;?>




