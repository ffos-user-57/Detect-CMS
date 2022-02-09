
<?php
//handled warnings for new php versions (preg_match and all)
//imported everything the way it should work for XAMPP
//FINALLY WORKS - struggled for this version a bunch

require "DetectCMS.php";

//put your domain here i just used my localhost setup of joomla
$domain = "http://localhost/joom";

$cms = new DetectCMS\DetectCMS($domain);

if ($cms->getResult()) {
    echo "Detected CMS: " . $cms->getResult();
} else {
    echo "CMS couldn't be detected";
}




?>