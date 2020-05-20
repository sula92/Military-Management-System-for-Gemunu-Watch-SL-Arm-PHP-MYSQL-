

<?php

$res=mysql_query("SELECT file FROM tbl_uploads WHERE id=".$_GET['remove_id']);
$row=mysql_fetch_array($res);
mysql_query("DELETE FROM tbl_uploads WHERE id=".$_GET['remove_id']);
unlink("uploads/".$row['file']);

?>