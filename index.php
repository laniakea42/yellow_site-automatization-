<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetPageProperty("keywords", "конференция, бухгалтеров, казахстанская, учёт 2020, Портал Учёт, КПН, ИПН, соцналог");
$APPLICATION->SetPageProperty("description", "Первая онлайн-конференция от Учёт.kz по автоматизации учета");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Автоматизация учёта и бизнес процессов - 2021</title>
	<link rel="icon" type="image/png" href="https://buh.uchet.kz/img/buh-small.png">
	<link rel="stylesheet" href="css/libs.css">
	<link rel="stylesheet" href="css/style.css">

	<style>

.rel_about, section,
.rel_iph,
.rel_newmain  {overflow: hidden !important}
		
		#fsPlan {display:none;}
  input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

#form_55 {
  background-color: #fff;
  color: #002A50;
  border-radius: 8px;
  box-shadow:  0 2px 4px rgba(0,0,0, .5);
  position: relative;
  z-index: 5;
  padding-top: 30px;
  padding-bottom: 30px;
  max-width: 550px;
  margin: 10px auto;
}
textarea, input[type="text"], input[type="tel"], input[type="email"], input[type="search"], input[type="password"] {
  margin-top: 5px;
}

#fsPlan label {
  display: block;
  position: relative;
  line-height: 1;
}

#fsPlan label[for="PHONE"] {
  margin-bottom: 10px;
}
#fsPlan label input {
  position: absolute;
  left: 0; top: 2px;
}

#fsPlan label span {padding-left: 20px;}

#form_55 input[type="submit"] {
  display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: -webkit-max-content;
    width: -moz-max-content;
    width: max-content;
    text-align: center;
    cursor: pointer;
    line-height: 1;
    -webkit-transition: 300ms ease-out;
    transition: 300ms ease-out;
    font-size: 24px;
    text-transform: uppercase;
    color: #141414;
    font-family: "Gilroy-Bold";
    text-transform: uppercase;
    background-color: transparent;
    padding: .45em 1.05em;
    border: 0;
    outline: 0;
    -webkit-box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    -webkit-border-radius: 5px;
    border-radius: 5px;
    background: #FFB400;
    margin: 10px auto 0 ;
}

#form_55 > * {border: 0 !important;}

#form_55 textarea, 
#form_55 input[type="text"], 
#form_55 input[type="tel"], 
#form_55 input[type="email"], 
#form_55 input[type="search"], 
#form_55 input[type="password"] {
  border: 0 !important;
  border-bottom: 1px solid #333 !important;
  padding-left: 5px !important;
  outline: 0;
  display: block !important
}

@media(max-width: 520px ) {
  #fsPlan label input {top: -3px;}
  #form_55 input[type="submit"] {font-size: 16px}
}

@media(max-width: 880px) {
	.rel5 .grid2 {grid-template-columns: 100%;}
}

textarea,
input[type="text"],
input[type="tel"],
input[type="email"],
input[type="search"],
input[type="password"] {
  min-height: 40px;
  width: 100%;
  background-color: #fff;
  font-family: "Gilroy-Regular";
  font-size: 16px;
  padding: 5px 15px;
  margin-bottom: 15px;
  -webkit-box-shadow: none;
  box-shadow: none; }
  textarea::-webkit-input-placeholder,
  input[type="text"]::-webkit-input-placeholder,
  input[type="tel"]::-webkit-input-placeholder,
  input[type="email"]::-webkit-input-placeholder,
  input[type="search"]::-webkit-input-placeholder,
  input[type="password"]::-webkit-input-placeholder {
    color: inherit;
    opacity: .8; }
  textarea::-moz-placeholder,
  input[type="text"]::-moz-placeholder,
  input[type="tel"]::-moz-placeholder,
  input[type="email"]::-moz-placeholder,
  input[type="search"]::-moz-placeholder,
  input[type="password"]::-moz-placeholder {
    color: inherit;
    opacity: .8; }
  textarea:-ms-input-placeholder,
  input[type="text"]:-ms-input-placeholder,
  input[type="tel"]:-ms-input-placeholder,
  input[type="email"]:-ms-input-placeholder,
  input[type="search"]:-ms-input-placeholder,
  input[type="password"]:-ms-input-placeholder {
    color: inherit;
    opacity: .8; }
  textarea::placeholder,
  input[type="text"]::placeholder,
  input[type="tel"]::placeholder,
  input[type="email"]::placeholder,
  input[type="search"]::placeholder,
  input[type="password"]::placeholder {
    color: inherit;
    opacity: .8; }

	</style>
</head>
<body>
	<header class="header">
		<div class="container fcb">
	
			<svg class="ham hamRotate ham4 nav--btn" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
				<path
					  class="line top"
					  d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
				<path
					  class="line middle"
					  d="m 70,50 h -40" />
				<path
					  class="line bottom"
					  d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
			  </svg>
	
			<img src="./img/logo.svg" alt="" class="logo_img">
	
			<nav class="nav">
				<a href="#about">О конференции</a>
				<a href="#speakers">Спикеры</a>
				<a href="#programm">Программа</a>
				<a href="https://buh.uchet.kz/" target="_blank">Учёт.Бухгалтерия</a>
				<a href="#partners">Партнёры</a>
			</nav>
	
			<a href="#regbl" class="btn btn-w">РЕГИСТРАЦИЯ</a>
	
		</div>
	</header>
	<div class="wrapper index-page">

		
		<section id="secmain" class="rel rel_newmain rel1">
			<img src="./img/lt.svg" alt="" class="dec lt">
			<img src="./img/lb.svg" alt="" class="dec lb">
			<img src="./img/rt.svg" alt="" class="dec rt">
			<img src="./img/rb.svg" alt="" class="dec rb">
			<div class="container">
				<div class="grid2 grid2_newmain">
					<div class="lcol">
						<h1>
						ОНЛАЙН-КОНФЕРЕНЦИЯ
							<span>
								 Автоматизация учёта и бизнес процессов - 2021
							</span>
						</h1>
						<p class="subhead1">
						Первая онлайн-конференция от Учёт.kz по автоматизации учета.<br>Мы расскажем, как оцифровать разные отрасли бизнеса.<br>
						</p>
						<div class="flex">
							<div class="flex flex_datetime">
								<img src="./img/icon1.svg" alt="">
								<nobr>15 - 19  марта</nobr>
							</div>
	
							<div class="flex flex_datetime">
								<img src="./img/icon2.svg" alt="">
								<nobr>с 14:30 до 17:30</nobr>
							</div>
						</div>
	
						<div class="flex flex_datetime">
							<img src="./img/icon3.svg" alt="">
							Абсолютно бесплатно
						</div>
	
						<a href="#regbl" class="btn">Участвовать</a>
	
					</div>
	
					<div class="rcol">
							<img src="./img/2.svg" alt="" class="right_decor wow fadeInUp">
					</div>
				</div>
	
			</div>
	
			<div class="soc_row">
				<a href="https://www.facebook.com/Uchet.kz/" target="_blank">
					<img src="./img/soc1.svg" alt="">
				</a>
				<a href="https://www.youtube.com/user/uchetkz/videos" target="_blank">
					<img src="./img/soc2.svg" alt="">
				</a>
				<a href="https://www.instagram.com/uchet.kz/" target="_blank">
					<img src="./img/soc3.svg" alt="">
				</a>
				<a href="https://t.me/uchet_kz" target="_blank">
					<img src="./img/soc4.svg" alt="">
				</a>
			</div>
		</section>

		<section id="regbl" class="rel5 rel">
			<div class="circle-c">
				<div class="circle">
				</div>
			</div>
			<div class="container">

				<div class="grid2">
					<div class="lcol">
					<h2>Регистрация</h2>
						<p>Зарегистрируйтесь прямо сейчас, чтобы не пропустить УНИКАЛЬНОЕ СОБЫТИЕ 2021 года для всех бухгалтеров, предпринимателей, финансовых директоров и руководителей отдела продаж</p>
						<p><b>15, 16, 17, 18, 19 марта - </b>участие бесплатное для всех зарегистрировавшихся.</p>
						<!-- <p ><b>19 февраля  - </b>VIP день, участие бесплатное только для подписчиков Портала Учёт. Стоимость участников без подписки - 50 000 тенге</p>-->
						<!-- <p><b>19 февраля - </b>Platinum день, только для тарифов МАСТЕР и ЭКСПЕРТ, стоимость для тарифа ПРОФ - 50 000 тенге, без подписки 75 000 тенге.</p> -->
						<p><b>За участие в конференции Вы получите сертификаты повышения квалификации.</b></p>
					</div>

					<div class="rcol">
						<?$APPLICATION->IncludeComponent(
							"bitrix:form.result.new", "",
						   Array(
						   "CACHE_TIME" => "3600",
						   "CACHE_TYPE" => "N",
						   "CHAIN_ITEM_LINK" => "",
						   "CHAIN_ITEM_TEXT" => "",
						   "COMPOSITE_FRAME_MODE" => "N",
						   "COMPOSITE_FRAME_TYPE" => "AUTO",
						   "EDIT_URL" => "",
						   "IGNORE_CUSTOM_TEMPLATE" => "N",
						   "LIST_URL" => "",
						   "SEF_MODE" => "N",
						   "SUCCESS_URL" => "https://uchet.kz/conf/2021/ok.php",
						   "USE_EXTENDED_ERRORS" => "N",
						   "VARIABLE_ALIASES" => Array(
						   "RESULT_ID" => "RESULT_ID",
						   "WEB_FORM_ID" => "WEB_FORM_ID"
						   ),
						   "WEB_FORM_ID" => "55",
                           "CONF_ID" => "1939"
						   )
						   );?>
							<script type="text/javascript">
							$( document ).ready(function() {
								if( $('#formErrors').children().length != 0 )
							{
								var elmnt = document.getElementById("form_55");
								elmnt.scrollIntoView();
							}
							});
							</script>
					</div>

				</div>
			</div>
		</section>


		<section id="about" class="rel_about">
			<div class="container">

				<h2>О конференции</h2>

				<p class="lg">На конференции мы расскажем как оцифровать разные отрасли бизнеса. Как упростить, улучшить и оптимизировать работу бухгалтера, финансиста и руководителя.</p>
				<p class="lg">Конференция будет интересна для всех, кто хочет оптимизировать и ускорить свою работу: бухгалтерам, финансовым директорам и аналитикам, начальникам отделов продаж и конечно же руководителям и собственникам компаний. </p>

				<div class="about_grid">
					<div class="lcol">
						<p class="lg"><b>За 5 дней участия в конференции вы получите:</b></p>

						<div class="grid2">
							<div class="plus_row">
								<div class="plus_ico"><img src="./img/pl1.svg" alt=""></div>
								<div class="plus_txt">
									Доклады с подробными инструкциями по работе с программами
								</div>
							</div>

							<div class="plus_row">
								<div class="plus_ico"><img src="./img/pl2.svg" alt=""></div>
								<div class="plus_txt">
									Экспертов из различных отраслей
								</div>
							</div>

							<div class="plus_row">
								<div class="plus_ico"><img src="./img/pl3.svg" alt=""></div>
								<div class="plus_txt">
									Реальные кейсы, которые можно применить в жизни

								</div>
							</div>

							<div class="plus_row">
								<div class="plus_ico"><img src="./img/pl4.svg" alt=""></div>
								<div class="plus_txt">
									Удобный онлайн формат, без отрыва от рабочего места
								</div>
							</div>

						</div>
					</div>

					<div class="rcol">
						<img src="./img/rcol.svg" alt="">
					</div>
				</div>
			</div>
		</section>

		<section id="certs" class="rel_certs">
			<div class="container">
				<h2>Получайте сертификаты</h2>

				<div class="p lg">
					<b>Участвуйте в конференции каждый день <br>и получайте до 15 часов повышения квалификации</b>
				</div>
				<div class="grid2">

					<div class="lcol"><img src="./img/certs.png" alt="" class="wow fadeInUp"></div>

					<div class="rcol"><img src="./img/cert_r.svg" alt=""></div>
				</div>

			</div>
		</section>

		<section id="programm" class="rel_programm">
			<div class="container">
				<h2>Программа онлайн-конференции</h2>

				<!-- Tab links -->
				<div class="tab">
					<button class="tablinks active" onclick="openCity(event, 'first')">
						<div class="tablinks_day">1 день</div>
						<div class="tablinks_date">15 марта</div>
					</button>


					<button class="tablinks" onclick="openCity(event, 'second')">
						<div class="tablinks_day">2 день</div>
						<div class="tablinks_date">16 марта</div>
					</button>


					<button class="tablinks" onclick="openCity(event, 'third')">
						<div class="tablinks_day">3 день</div>
						<div class="tablinks_date">17 марта</div>
					</button>


					<button class="tablinks" onclick="openCity(event, 'fourth')">
						<div class="tablinks_day">4 день</div>
						<div class="tablinks_date">18 марта</div>
					</button>


					<button class="tablinks" onclick="openCity(event, 'fifth')">
						<div class="tablinks_day">5 день</div>
						<div class="tablinks_date">19 марта</div>
					</button>
				</div>

				<img src="./img/row.svg" alt="" class="dec_row">
				
				<!-- Tab content -->
				<div id="first" class="tabcontent" style="display: block;">
					<div class="tabcontent_title">
						<b>Работа с программами 1С</b>
						Как наиболее эффективно настроить работу с программой
					</div>

					<div class="tabcontent_grid">
						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>14:30 - 15:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Лайфаки по работе с 1С, как сделать свою работу проще
								</div>
								<div class="tabcontent_subinfo">
									<b>Альфия Суворова</b> <br>
									Методист «Учёт.Бухгалтерия»
								</div>
							</div>
						</div>

						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>15:30 - 16:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Арсенал Бухгалтера, инструментарий для повышения эффективности
								</div>
								<div class="tabcontent_subinfo">
									<b>Тимур Ходжамкулов</b> <br>
									Руководитель «Учёт.Бухгалтерия»
								</div>
							</div>
						</div>

						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>16:30 - 17:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Эффективная работа со стандартными расчетами в 1С
								</div>
								<div class="tabcontent_subinfo">
									<b>Марина Сергушина</b> <br>
									Профессиональный бухгалтер
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div id="second" class="tabcontent">
					<div class="tabcontent_title">
						<b>Как подготовить  регламентированные  отчеты</b>
						сверить их между собой и сдать их вовремя
					</div>

					<div class="tabcontent_grid">
						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>14:30 - 15:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Сверка ФНО Перед отправкой годового отчета 
								</div>
								<div class="tabcontent_subinfo">
									<b>Марина Сергушина</b> <br>
									Профессиональный бухгалтер
								</div>
							</div>
						</div>

						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>15:30 - 16:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Важные аспекты подготовки годового отчета

								</div>
								<div class="tabcontent_subinfo">
									<b>Альфия Суворова</b> <br>
									Методист «Учёт.Бухгалтерия»
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div id="third" class="tabcontent">
					<div class="tabcontent_title">
						<b>Инструменты автоматизации продаж</b>
					</div>

					<div class="tabcontent_grid">
						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>14:30 - 15:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Как автоматизировать небольшой магазин (мегасистемс 2 в 1) 
								</div>
								<div class="tabcontent_subinfo">
									<!-- <b>Альфия</b> <br>
									Методист -->
								</div>
							</div>
						</div>

						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>15:30 - 16:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Автоматизация удаленных отделов продаж (на битрикс24)
								</div>
								<div class="tabcontent_subinfo">
									<!-- <b>Тимур</b> <br>
									Руководитель -->
								</div>
							</div>
						</div>

						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>16:30 - 17:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Как упросить продажи на сайте (Робокасса и фискализация)
								</div>
								<div class="tabcontent_subinfo">
									<!-- <b>Марина</b> <br>
									Профессиональный -->
								</div>
							</div>
						</div>
					</div>

				</div>

				<div id="fourth" class="tabcontent">
					<div class="tabcontent_title">
						<b>Повышение эффективности управления компанией</b>
					</div>

					<div class="tabcontent_grid">
						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>14:30 - 15:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Введение в Бережливое управление/ Lean management
								</div>
								<div class="tabcontent_subinfo">
									<!-- <b>Альфия</b> <br>
									Методист -->
								</div>
							</div>
						</div>

						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>15:30 - 16:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Дашборд руководителя. Первый шаг к визуализации показателей в компании.
								</div>
								<div class="tabcontent_subinfo">
									<!-- <b>Тимур</b> <br>
									Руководитель -->
								</div>
							</div>
						</div>

						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>16:30 - 17:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Кайдзен. Применение инструментов на практике.
								</div>
								<div class="tabcontent_subinfo">
									<!-- <b>Марина</b> <br>
									Профессиональный -->
								</div>
							</div>
						</div>

						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>16:30 - 17:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Автоматизация бизнес-процессов, управления проектами и задачами (битрикс24)
								</div>
								<div class="tabcontent_subinfo">
									<!-- <b>Марина</b> <br>
									Профессиональный -->
								</div>
							</div>
						</div>

					</div>
				</div>
				
				<div id="fifth" class="tabcontent">
					<div class="tabcontent_title">
						<b>Инструменты в работе финансово директора/аналитика</b>
					</div>

					<div class="tabcontent_grid">
						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>14:30 - 15:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Финансовый контроллинг как элемент системы управления бизнесом
								</div>
								<div class="tabcontent_subinfo">
									<!-- <b>Альфия</b> <br>
									Методист -->
								</div>
							</div>
						</div>

						<div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>15:30 - 16:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Примеры повышения эффективности работы финансового директора/аналитика с помощью автоматизации и не только
								</div>
								<div class="tabcontent_subinfo">
									<!-- <b>Тимур</b> <br>
									Руководитель -->
								</div>
							</div>
						</div>

						<!-- <div class="tabcontent_dateItem">
							<div class="tabcontent_date">
								<nobr>16:30</nobr>
							</div>

							<div class="tabcontent_right">
								<div class="tabcontent_datetitle">
									Эффективна
								</div>
								<div class="tabcontent_subinfo">
									<b>Марина</b> <br>
									Профессиональный
								</div>
							</div> -->


						</div>
					</div>
				</div>

		</section>

		<section id="speakers" class="rel_speakers">
			<div class="container">
				<h2>Спикеры</h2>

				<div class="grid4">
					<div class="speaker_row">
						<div class="speaker_pic">
							<img src="./img/s1.png" alt="">
						</div>
						<div class="speaker_name">
							<b>Тимур Ходжамкулов</b>
						</div>
						<div class="speaker_regals">Руководитель «Учёт.Бухгалтерия»</div>
					</div>

					<div class="speaker_row">
						<div class="speaker_pic">
							<img src="./img/s2.png" alt="">
						</div>
						<div class="speaker_name">
							<b>Альфия Суворова</b>
						</div>
						<div class="speaker_regals">Методист «Учёт.Бухгалтерия»</div>
					</div>

					<div class="speaker_row">
						<div class="speaker_pic">
							<img src="./img/s3.png" alt="">
						</div>
						<div class="speaker_name">
							<b>Марина Сергушина</b>
						</div>
						<div class="speaker_regals">Профессиональный бухгалтер</div>
					</div>

					<div class="speaker_row">
						<div class="speaker_pic">
							<img src="./img/s4.png" alt="">
						</div>
						<div class="speaker_name">
							<b>Алексей Розинкин</b>
						</div>
						<div class="speaker_regals">Член Совета ПОБ «Учёт»</div>
					</div>

				</div>
			</div>
		</section>

		<section id="iph" class="rel rel_iph">

			<img src="./img/lt2.svg" alt="" class="dec lt">
			<img src="./img/rt2.svg" alt="" class="dec rt">
			<img src="./img/lb2.svg" alt="" class="dec lb">
			<img src="./img/rb2.svg" alt="" class="dec rb">


			<div class="container">
				<h2>Розыгрыш</h2>
				<div class="grid2">
					<div class="lcol">
						<p class="lg">
							Оформите или продлите <br>
							годовую подписку на <nobr><b>Учёт.Бухгалтерию</b></nobr> или <nobr><b>Онлайн-кассу</b> </nobr>
							и участвуйте в розыгрыше 
							<nobr><b>iPhone 12 Pro Max</b></nobr>
						</p>

						<a href="https://uchet.kz/lp/buh-promo2021/?utm_source=uchet&utm_medium=block&utm_campaign=buh-promo" target="_blank" class="btn">Подробнее</a>
					</div>

					<div class="rcol">
						<img src="./img/iph.png" alt="" class="wow fadeInUp">
					</div>
				</div>
			</div>
			
		</section>

		<!-- <section id="partners">
			<div class="container">
				<h2>партнёры</h2>
				<div class="grid4">
					
				</div>

				<h2>Организаторы</h2>
				<div class="grid4">
					
				</div>

			</div>
		</section> -->


	</div>
<footer class="f">
    <div class="container f_grid">
        <div class="f_unit">
            <div class="f_title">Контакты</div>
            <p>Казахстан, Алматы ул. Жарокова, 41 050000 <br>
                <a href="tel:+77273507474">+7 727 350-74-74</a> <br>
                Источник Учёт.kz: <a href="https://uchet.kz/">uchet.kz</a></p>
        </div>

        <div class="f_unit">
            <div class="f_title">Мы в социальных сетях</div>

            <div class="soc_row">
				<a href="https://www.facebook.com/Uchet.kz/" target="_blank">
					<img src="./img/soc1.svg" alt="">
				</a>
				<a href="https://www.youtube.com/user/uchetkz/videos" target="_blank">
					<img src="./img/soc2.svg" alt="">
				</a>
				<a href="https://www.instagram.com/uchet.kz/" target="_blank">
					<img src="./img/soc3.svg" alt="">
				</a>
				<a href="https://t.me/uchet_kz" target="_blank">
					<img src="./img/soc4.svg" alt="">
				</a>
			</div>

        </div>
    </div>
</footer>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/libs.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>
