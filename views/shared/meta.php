<?php
$seo_description = $lang['SEO']['DESCRIPTION'];
$seo_keywords = $lang['SEO']['KEYWORDS'];
$seo_title = $lang['SEO']['TITLE'];

$seo_site_name = 'Sunwer - Solution for your ideas';
$seo_site_url = 'https://sunwer.group';
$seo_site_domain = 'sunwer.group';
$seo_site_share_image = 'http://sunwer.group/content/images/share/share-1.png';
?>

<!--SEO-->
<meta name="description"            content="<?= $seo_description; ?>">
<meta name="keywords"               content="<?= $seo_keywords; ?>">
<meta property="og:type"            content="Organization">
<meta property="og:site_name"       content="<?= $seo_site_name; ?>">
<meta property="og:title"           content="<?= $seo_title; ?>">
<meta property="og:description"     content="<?= $seo_description; ?>">
<meta property="og:url"             content="<?= $seo_site_url; ?>">
<meta property="og:locale"          content="<?= $current_lang; ?>">
<meta property="og:image"           content="<?= $seo_site_share_image; ?>">
<meta name="twitter:card"           content="summary_large_image">
<meta name="twitter:title"          content="<?= $seo_title; ?>">
<meta name="twitter:description"    content="<?= $seo_description; ?>">
<meta name="twitter:image:src"      content="<?= $seo_site_share_image; ?>">
<meta name="twitter:url"            content="<?= $seo_site_url; ?>">
<meta name="twitter:domain"         content="<?= $seo_site_domain; ?>">
<meta name="twitter:site"           content="<?= $seo_site_name; ?>">
<meta name="twitter:creator"        content="<?= $seo_site_name; ?>">

<link rel="canonical" href="<?= $seo_site_url; ?>" />
<link rel='dns-prefetch' href='//maps.googleapis.com'>
<link rel='dns-prefetch' href='//vk.com'>
<link rel='dns-prefetch' href='//google.kz'>
<link rel='dns-prefetch' href='//yandex.kz'>
<link rel='dns-prefetch' href='//s.w.org'>

<!--Let browser know website is optimized for mobile-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1"/>
<meta content="IE=11;IE=Edge" http-equiv="X-UA-Compatible">