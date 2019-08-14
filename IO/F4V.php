<?php

/*
  IO_F4V class
  (c) 2019/08/14 yoya@awm.jp
  ref) https://www.adobe.com/devnet/f4v.html
 */

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'IO/ISOBMFF.php';
}

class IO_F4V extends IO_ISOBMFF {
    
}
