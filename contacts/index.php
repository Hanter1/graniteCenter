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
		"API_KEY" => "",
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
 <input type="text" class="review_form_input" placeholder="Name" required="required"> <input type="email" class="review_form_input" placeholder="E-mail" required="required"> <input type="text" class="review_form_input" placeholder="Subject">
							</div>
 <textarea class="review_form_text" name="review_form_text" placeholder="Message"></textarea> <button type="submit" class="review_form_button">send message</button>
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
						 contact info
					</div>
					<div class="contact_info_content">
						<ul>
							<li>
							<div class="contact_info_icon">
 <img src="/local/templates/granit/images/contact_info_1.png" alt="">
							</div>
							<div class="contact_info_text">
								 Rosia Road, no67, Gibraltar UK
							</div>
 </li>
							<li>
							<div class="contact_info_icon">
 <img src="/local/templates/granit/images/contact_info_2.png" alt="">
							</div>
							<div class="contact_info_text">
 <a href="mailto:office@yourbusiness.com">office@yourbusiness.com</a>
							</div>
 </li>
							<li>
							<div class="contact_info_icon">
 <img src="/local/templates/granit/images/contact_info_3.png" alt="">
							</div>
							<div class="contact_info_text">
								 +45 7703 29293 34
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
						 faq
					</div>
					<div class="faq_content">
						 <!-- Accordions -->
						<div class="accordions">
							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center">
									<div>
										 Lorem ipsum dolor sit amet, consectetur?
									</div>
								</div>
								<div class="accordion_panel">
									<p>
										 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.
									</p>
								</div>
							</div>
							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center">
									<div>
										 Ipsum dolor sit amet, consectetur?
									</div>
								</div>
								<div class="accordion_panel">
									<p>
										 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.
									</p>
								</div>
							</div>
							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center active">
									<div>
										 Proin eu dui porta, pretium metus vitae?
									</div>
								</div>
								<div class="accordion_panel">
									<p>
										 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.
									</p>
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