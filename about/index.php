<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("О компани");
use Bitrix\Main\Page\Asset;

?>
<div class="about_container">
    <div class="extra clearfix">
        <div class="extra_promo extra_promo_1">

            <div class="extra_promo_image" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/images/about/banner.jpg)"></div>
            <div class="extra_1_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="extra_1_price">О нас</div>
                <div class="extra_1_title">Познакомимся ближе</div>
                <div class="extra_1_text"></div>
<!--                <div class="button extra_1_button"><a href="#">К акции</a></div>-->
            </div>
        </div>
        <div class="extra_promo extra_promo_3">
<h3>Наша история</h3>
               <p>
                   Мастерская по изготовлению памятников «Центр гранита» имеет опыт работы более 10 лет. Опыт работы позволяет изготавливать качественные памятники, надгробные плиты, столешницы и подоконники из гранита.
                   Памятники, надгробья и другую продукцию изготавливаем из финского, украинского и карельского гранита. При заказе памятника услуги художника предоставляются бесплатно.
                   Если вы на данный момент вы не имеете возможности установить памятник на могилу, то наша мастерская предлагает услуги по хранению памятников абсолютно бесплатно.
                   Наше отличие – это доступные цены, техническая оснащенность и профессионализм.
               </p>
<!--            </div>-->
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>