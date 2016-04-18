<?Php
include "include/session.php";
include "config.php";
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>(Type a title for your page here)</title>
</head>

<body>



<?Php
require "check.php";

require "bottom.php";
?>
<center>
<form>
</form>

<form action="http://localhost/newp/plupload/examples/jquery/all_runtimes.html" method="get">
    <input type="submit" value="upload" 
         name="Submit" id="frm1_submit" />
</form>

<form action="http://localhost/newp/gallery/plugin/index.html">
    <input type="submit" value="View Gallery" 
         name="Submit" id="frm1_submit" />
</form>
</center> 

</body>

</html>
