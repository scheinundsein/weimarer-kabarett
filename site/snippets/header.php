<!doctype html>
<html lang="de">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- Robots -->
  <?php if(option('debug') == true): ?>
  <meta name="robots" content="noindex, nofollow">
  <?php else: ?>
  <meta name="robots" content="index, follow">
  <?php endif ?>

  <!-- Canonical -->
  <link rel="canonical" href="<?php echo $page->url() ?>" />

  <!-- Open graph -->
  <meta property="og:url" content="<?php echo $page->url() ?>" />
  <?php if($page->seoTitle()->isNotEmpty()): ?>
  <meta property="og:title" content="<?php echo $page->seoTitle() ?>"/>
  <?php else: ?>
  <meta property="og:title" content="<?php echo $page->title() ?> | <?php echo $site->title() ?>"/>
  <?php endif ?>
  <meta property="og:description" content="<?php echo $page->seoDesc() ?>" />
  <?php if($ogimage = $page->images()->filterBy('extension', 'jpg')->first()): ?>
  <meta property="og:image" content="<?php echo $ogimage->url() ?>" />
  <?php endif ?>

  <!-- Title -->
  <?php if($page->seoTitle()->isNotEmpty()): ?>
  <title><?php echo $page->seoTitle() ?></title>
  <?php else: ?>
  <title><?php echo $page->title() ?> | <?php echo $site->title() ?></title>
  <?php endif ?>

  <!-- Description -->
  <meta name="description" content="<?php echo $page->seoDesc() ?>" />

  <!-- Stylesheets -->
  <?php echo css('assets/css/styles.css') ?>

  <!-- Favicon -->
 <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

</head>

<body class="template-<?php echo $page->intendedTemplate() ?> page-<?php echo $page->slug() ?>">

  <!-- Site Wrapper -->
  <div class="site-wrapper">

    <!-- Header -->
    <header class="site-header">
      <div class="container">

        <div class="site-header__inner">

          <a class="site-header__logo is-hidden-tablet" href="<?php echo $site->url() ?>">
            <img src="<?php echo url('assets/images/bildmarke-weimarer-kabarett-weiss.svg') ?>" alt="Logo Weimarer Kabarett">
          </a>

          <!-- Menü -->
          <nav class="site-header__menu">
            <ul>
              <li class="is-hidden-mobile">
                  <a class="site-header__logo" href="<?php echo $site->url() ?>">
                    <img src="<?php echo url('assets/images/logo-weimarer-kabarett-weiss.svg') ?>" alt="Logo Weimarer Kabarett">
                  </a>
              </li>
              <?php foreach ($pages->listed() as $item): ?>
              <li>
                <a <?php e($item->isOpen(), 'class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </nav>

          <a href="javascript:void(0)" class="site-header__toggle-menu is-hidden-tablet"></a>

        </div>

      </div>
    </header>

