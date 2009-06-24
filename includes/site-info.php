<?php
  // Define site title
  $siteName = "Chris Kankiewicz";

  // Get current page file name ***REQUIRED FOR DYNAMIC MENU***
  $page = basename($_SERVER["PHP_SELF"]);
  
  // Internet Explorer Check
  function isIE() {
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    if (ereg("msie 6.", $userAgent)) {
      return true;
    } else {
      return false;
    }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
