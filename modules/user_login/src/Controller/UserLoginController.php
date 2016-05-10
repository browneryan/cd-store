<?php

namespace Drupal\user_login\Controller;

class UserLoginController {
  public function user_login_menu() {
    $items['welcome'] = array(
      'title' => 'Hello User',
      'page callback' => 'welcome',
      'access callback' => TRUE,
      'type' => MENU_CALLBACK,
    );
    return $items;
  }

  public function welcome() {
    return "<p>Hello user!</p>";
  }
}
