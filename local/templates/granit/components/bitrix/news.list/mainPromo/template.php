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
if ($arResult["ITEMS"]): ?>
<div class="promo">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">
                        <?=GetMessage("TITLE")?>
                    </div>
                    <div class="section_title">
                        <?=GetMessage("SALE")?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row promo_container">
            <!-- Promo Item -->
            <?php foreach ($arResult["ITEMS"] as $arItem):
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            $caunt++
            ?>
                <div class="col-lg-4 promo_col">
                    <div class="promo_item">
                        <div class="promo_image">
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
                                <div class="promo_content promo_content_<?=$caunt?>">
                                <div class="promo_title">
                                    <?=$arItem['PROPERTIES']['ADD_DISCOUNT']['VALUE']?>
                                </div>
                                <div class="promo_subtitle">
                                    <?=$arItem['PROPERTIES']['ADD_TEXT_DISCOUNT']['VALUE']?>
                                </div>
                            </div>
                        </div>
                        <div class="promo_link">
                            <a href="<?=$arItem['PROPERTIES']['ADD_LINK']['VALUE']?>"><?=GetMessage("ORDER")?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif;?>