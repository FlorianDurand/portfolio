<?php

define('THEME_PATH',       get_template_directory()       );
define('INCLUDES_PATH',    THEME_PATH . '/includes'       );
define('LAYOUTS_PATH',     THEME_PATH . '/layouts'        );
define('THEME_URL',        get_template_directory_uri()   );
define('CSS_URL',          THEME_URL  . '/css'         );
define('JS_URL',           THEME_URL  . '/js'        );
define('IMAGES_URL',       THEME_URL  . '/img'  );
define('FAVICONS_URL',     THEME_URL  . '/img');
define('ADMIN_IMAGES_URL', IMAGES_URL . '/admin'          );

foreach (glob(THEME_PATH . '/includes/*.php') as $file ) {
  include_once $file;
}