<?php
header ('Content-type: text/html; charset=utf-8');

?>
<html>
    <head>
        <title><? echo $PageTitle; ?>:</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="UTF-8">
        <meta http-equiv="Pragma" CONTENT="no-cache">
        <meta http-equiv="Expires" CONTENT="0">
        <meta http-equiv="CACHE-CONTROL" CONTENT="NO-CACHE">
        <meta http-equiv="Content-Language" CONTENT="en-gb">
        <meta name="robots" content="noindex,nofollow" />
        <meta name="googlebot" content="noindex,nofollow" />        
        <link rel="stylesheet" type="text/css" href="includes/style.css">

	<script type="text/javascript" src="includes/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="includes/js/simple-expand.js"></script>
    </head>
    <body>

    <div style="overflow: auto;">
        <div style="margin:10px;">
            <div style="float:right;width:100%;"><img src="images/logo.png"></div>
            <div style="width:100%;text-align:left;">
                <hr><span style="padding:10px;"><a href="<?php echo $path; ?>/" style="color:#eee;">Server Stats</a> | <a href="playersearch.php" style="color:#eee;">Player Search</a><hr>
            </div>
        <div>
