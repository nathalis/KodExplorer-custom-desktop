<?php
if (isset($_POST["memories"])) $memories = $_POST['memories'];
else $memories="";
if (isset($_POST["dataurl"])) $dataurl = $_POST['dataurl'];
else $dataurl="";

if ($dataurl!="") {
   $fp = fopen($dataurl, "w+"); 
  
   if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
      ftruncate($fp, 0);      // truncate file
      fwrite($fp,$memories);
      fflush($fp);            // flush output before releasing the lock
      flock($fp, LOCK_UN);    // release the lock
   } else {
      echo "Couldn't get the lock!";
   }
   fclose($fp);
}   

?>