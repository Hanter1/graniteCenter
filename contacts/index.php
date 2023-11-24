<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="map">
	<div class="google_map">
		<div class="map_container">
			<div>
                <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"API_KEY" => "bf643bc5-7c0d-4498-bb0b-143ba141428f",
		"CONTROLS" => array(
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:53.65604972240289;s:10:\"yandex_lon\";d:23.831965291971997;s:12:\"yandex_scale\";i:13;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:23.842093313213;s:3:\"LAT\";d:53.640671335561;s:4:\"TEXT\";s:159:\"<a href=\"https://yandex.by/maps/10274/grodno/house/ZkoYfgNhQEAFQFtpfXp1cXlkbQ==/?ll=23.842533%2C53.640819&z=19.11\">Индурское шоссе, 9</a>###RN###\";}}}",
		"MAP_HEIGHT" => "570",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_DBLCLICK_ZOOM",
			1 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
			</div>
		</div>
	</div>
</div>
 <!-- Contact Form -->
<div class="contact">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="review_form_container">
					<div class="review_form_title">
                        Свяжись с нами и мы обязательно подберем решения!
					</div>
					<div class="review_form_content">
						<form action="#" id="review_form" class="review_form">
							<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                <input type="text" class="review_form_input" placeholder="Имя" required="required">
                                <input type="email" class="review_form_input" placeholder="E-mail" required="required">
                                <input type="text" class="review_form_input" placeholder="Тема">
							</div>
                            <textarea class="review_form_text" name="review_form_text" placeholder="Сообщение"></textarea>
                            <button type="submit" class="review_form_button">Отправить</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <!-- Contact Text -->
<div class="contact_text">
	<div class="container">
		<div class="row">
			 <!-- Contact Info -->
			<div class="col-lg-5">
				<div class="contact_info">
					<div class="contact_title">
						 Наши контакты
					</div>
					<div class="contact_info_content">
						<ul>
							<li>
                                <div class="contact_info_icon">
                                    <img src="/local/templates/granit/images/contact_info_1.png" alt="">
                                </div>
                                <div class="contact_info_text">
                                    г. Гродно, ул. Брикеля, 8, пом. 3
                                </div>
                            </li>
							<li>
                                <div class="contact_info_icon">
                                    <img src="/local/templates/granit/images/contact_info_2.png" alt="">
                                </div>
                                <div class="contact_info_text">
                                    <a href="mailto:office@yourbusiness.com">info@mail.ru</a>
                                </div>
                            </li>
							<li>
							<div class="contact_info_icon">
 <img src="/local/templates/granit/images/contact_info_3.png" alt="">
							</div>
							<div class="contact_info_text">
                                +375 44 111 11 11
							</div>
 </li>
						</ul>
					</div>
					<div class="contact_info_social">
						<ul>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			 <!-- FAQ -->
			<div class="col-lg-7">
				<div class="faq">
					<div class="contact_title">
						 Вопрос-ответ
					</div>
                    <div class="faq_content">

                        <!-- Accordions -->
                        <div class="accordions">

                            <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center"><div>Почему гранит лучше других материалов?</div></div>
                                <div class="accordion_panel" style="max-height: 0px;">
                                    <p>Гранит – это оптимальное соотношение долговечности и доступной стоимости: камень отличается высокой твердостью, устойчивостью к влаге и различным загрязнениям. Он не требует особенного ухода, при этом служит более 100 лет.</p>
                                </div>
                            </div>

                            <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center"><div>Как удалить пятна на граните?</div></div>
                                <div class="accordion_panel" style="max-height: 0px;">
                                    <p>Для удаления налета и загрязнений на граните, нужно приобрести специальные очистители для камня. Они помогут удалить пятна, цемент, плесень. Продаются такие препараты в специализированных магазинах.</p>
                                </div>
                            </div>

                            <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center active"><div>Как визуально отличить гранит от мрамора?</div></div>
                                <div class="accordion_panel" style="max-height: 190px;">
                                    <p>Гранит. Зернистый. Цвет тусклый, четкого изображения на его поверхности даже после очень качественной полировки не проявляется. Камень холодный, мрамор быстрее нагревается.
                                        Мрамор. Цвет ровный, рисунок волнистый, имеются прожилки, все это напоминает подымающийся над костром дым. Он блестит, в нем все отражается, словно в зеркале;
                                        Монументы из гранита имеют темный окрас, выглядят величественнее памятников из мрамора.</p>
                                </div>
                            </div>

                        </div>

                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>