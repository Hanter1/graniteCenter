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
    <div class="arrivals">
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
            <div class="row products_container">
                <!-- Product -->
    <?php foreach ($arResult["ITEMS"] as $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
                <div class="col-lg-4 product_col">
                    <div class="product">
                        <div class="product_image">
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
                        </div>
                        <div class="rating rating_<?=$arItem['PROPERTIES']['TOP']['VALUE']?>">
                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        </div>
                        <div class="product_content clearfix">
                            <div class="product_info">
                                <div class="product_name">
                                    <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>"><?=$arItem['NAME']?></a>
                                </div>
                                <div class="product_price">
                                    <?=$arItem['PROPERTIES']['CASH']['VALUE']?>
                                </div>
                            </div>
                            <div class="product_options">
                                <div class="product_buy product_option">
                                    <img src="/local/templates/granit/images/shopping-bag-white.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif;?>