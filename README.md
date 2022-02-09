Detect-CMS - Fixed it up for XAMPP with Latest PHP (8.0.11)
==========

Changes by ffos-user-57: Fixed up the preg-match at regexes (as well as preg match all) ; Fixed up the include a bit; 


PHP Library for detecting CMS

Install
-------

```bash
composer require krisseck/detect-cms:dev-master
```

How to use:
-----------

    include(__DIR__ . "/vendor/autoload.php");
    $domain = "http://google.com";
    $cms = new \DetectCMS\DetectCMS($domain);
    if($cms->getResult()) {
        echo "Detected CMS: ".$cms->getResult();
    } else {
        echo "CMS couldn't be detected";
    } 
