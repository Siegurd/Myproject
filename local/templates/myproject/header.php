<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html>
<head>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="stylesheet" type="text/css" href="<?=MARKUP?>/css/style.css">
	<script type="text/javascript" src="<?=MARKUP?>/js/jquery-1.9.1.min.js"></script>
</head>
<body>
<?$APPLICATION->ShowPanel()?>
<!-- begin container_main  -->
<div class="container_main">
	<a class="subscribe_new" href="#"></a>
	<!-- begin header  -->
	<div class="header">
		<div class="wmain">
			<div class="l_left">
				<a class="h_fb" href="#">
					<span>мы в FACEBOOK</span>
				</a>
			</div>
			<div class="l_center">
				<a class="logo" href="#"></a>
			</div>
			<div class="l_right">
				<a class="btn_main" href="#">
					<span>обратная связь</span>
				</a>
			</div>
		</div>
	</div>
	<!-- end header -->
	<!-- begin nav_main  -->
	<div class="nav_main">
		<div class="wmain">
			<?
			/**
			 * Здесь будет компонент МЕНЮ
			 * https://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
			 */
			?>
			<ul class="nav_main_inner">
				<li><a href="#">главная</a></li>
				<li>
					<a href="#">турниры</a>
					<ul>
						<li><a href="#">Feeder Mix Fight Challenge #2</a></li>
						<li><a href="#">Feeder Mix Fight Challenge #1</a></li>
					</ul>
				</li>
				<li><a href="#">РЕЗУЛЬТАТЫ и РЕЙТИНГ</a></li>
				<li><a href="#">НОВОСТИ</a></li>
				<li><a href="#">ГАЛЕРЕЯ</a></li>
				<li><a href="#">Блоги</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</div>
	</div>
	<!-- end nav_main -->


