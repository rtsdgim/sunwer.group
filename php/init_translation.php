<?php

$current_lang = null;
$default_lang = "ru";

// GET DEFAUL LANGUAGE
if (isset($_GET['lang'])) {
    $current_lang = $_GET['lang'];
} else {
    if (isset($_COOKIE['lang'])) {
        $current_lang = $_COOKIE['lang'];
    } else {
        $current_lang = $default_lang;
    }
}

// SAVE DEFAULT LANGUAGE TO COOKIE
setLangCookie($current_lang);

// GET TRANSLATION DATA
$lang = getTranslation($current_lang);
$news = getNews($current_lang);

// FUNCTIONS
function setLangCookie($lang) {
    setcookie("lang", $lang, time() + 60 * 60 * 24 * 100, "/");
}

function getTranslation($lang) {
    return (include '../lang/lang.' . $lang . '.php');
}

function getNews($lang) {
    return (include '../blog/blog.' . $lang . '.php');
}
