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
<div class="home">
	 <!-- Home Slider -->
	<div class="home_slider_container">
		<div class="owl-carousel owl-theme home_slider">
			 <!-- Home Slider Item -->
            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)">
                        </div>
                        <div class="home_slider_content">
                            <div class="home_slider_content_inner">
                                <div class="home_slider_subtitle"><?=$arItem['PROPERTIES']['ADD_SUBTITLE']['VALUE']?></div>
                                <div class="home_slider_title"><?=$arItem['NAME']?></div>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
		</div>
		 <!-- Home Slider Nav -->
		<div class="home_slider_next d-flex flex-column align-items-center justify-content-center">
 <img src="<?=SITE_TEMPLATE_PATH?>/images/arrow_r.png" alt="">
		</div>
		 <!-- Home Slider Dots -->
		<div class="home_slider_dots_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_slider_dots">
							<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
								<li class="home_slider_custom_dot active">01.
								<div>
								</div>
 </li>
								<li class="home_slider_custom_dot">02.
								<div>
								</div>
 </li>
								<li class="home_slider_custom_dot">03.
								<div>
								</div>
 </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>