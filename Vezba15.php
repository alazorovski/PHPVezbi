<?php  
$file_last_modified = filemtime("php-basic-exercises.php");   
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified);  
?>  