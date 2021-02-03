<?php
require 'core.inc.php';
require 'Connect.inc.php';


if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    echo"you logged in  <a href='logout.php'>Logout</a>";
} else {
    include 'loginform.inc.php';
}
?>