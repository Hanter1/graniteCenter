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
    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <div class="section_subtitle">
                            только лучшее
                        </div>
                        <div class="section_title">
                            Отзывы о нас
                        </div>
                    </div>
                </div>
            </div>
            <div class="row test_slider_container">
                <div class="col">
                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme test_slider text-center">
                        <!-- Testimonial Item -->
                        <?php foreach ($arResult["ITEMS"] as $arItem):
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                            <div class="owl-item">
                                <div class="test_text">
                                    “<?=$arItem['PREVIEW_TEXT']?>”
                                </div>
                                <div class="test_content">
                                    <div class="test_image">
                                        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
                                    </div>
                                    <div class="test_name">
                                        <?=$arItem['PROPERTIES']['ADD_FIO']['VALUE']?>
                                    </div>
                                    <div class="test_title">
                                        <?=$arItem['PROPERTIES']['ADD_STATUS']['VALUE']?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>




