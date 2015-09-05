<?php

/*
 *  CODED BY MAHDI HAZAVEH
 *  <mahdi@hazaveh.net>
 */

require_once 'class.lib.php';

function getCode() {
    if (isset($_POST['code']) && !empty($_POST['code'])) {
        echo htmlentities($_POST['code']);
    } else {
        echo htmlentities("<?php
echo 'You can start now. remember you can do Javascript here too;)';
?>");
    }
}
