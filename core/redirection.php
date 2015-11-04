<?php


add_action('init', 'choice_gender');
add_action('init', 'intro');

function choice_gender () {
  $url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  $u = explode('/', $url);
  if ($u[2] == "gender") {
    $cookie = str_replace('index.php', '',$_SERVER['SCRIPT_NAME']);
    setcookie("gender", $u[3], time()+ 3600 *24, COOKIEPATH, COOKIE_DOMAIN, false);
  }
}

function intro () {
  $url = explode('/', $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);

  if ($_COOKIE["gender"] && $url[2] == null) {
    header("Location: ".get_term_link( $_COOKIE["gender"],  'gender-cat'));
    exit;
  }
}