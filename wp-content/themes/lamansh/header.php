<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lamansh
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <header class="header">
    <div class="container">

      <div class="row">
        <div class="col-md-2 logo">
          <a rel="home" href="/"><img src="/wp-content/themes/lamansh/img/logo.png" alt="Лого"></a>
        </div>

        <div class="col-md-7 nav-wrapper">
          <div class="top">
            <div class="top-km">
              <p>ДО ЕВРОПЫ <span>57</span> КМ</p>
              <p>по Новорижскому шоссe</p>
            </div>
            <div class="top-mw">
              <a class="eModal-1" href="#">Оформить заявку on-line</a> <a class="eModal-3" href="#!">Письмо в офис продаж</a>
            </div>
          </div>
          <nav class="nav">
          <span class="main-nav-trigger trigger-nav">&#9776;</span>
            <ul class="trigger-victim">
              <li><a class="topLink" href="#about">О поселке</a></li>
              <li><a class="topLink" href="#houses">Дома</a></li>
              <li><a class="topLink" href="#land-parcels">Участки</a></li>
              <li><a class="topLink" href="#infrastructure">Инфраструктура</a></li>
              <li><a class="topLink" href="#contacts">Контакты</a></li>
              <li><a class="topLink" href="#map">На карте</a></li>
            </ul>

          </nav>
        </div>
        <div class="col-md-3 phone">
          <a class="tel" href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
          <a class="tel-button eModal-2" href="#!">Заказать обратный звонок</a>
        </div>
      </div>

    </div>
    <!-- .contaner -->


  </header>
  <!-- .header -->

	<div id="content" class="site-content">
