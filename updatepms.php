<?php
require('connect.php');
session_start();

if (isset($_SESSION['username'])) {

$username = $_SESSION['username'];

$query = mysql_query("select * from users where Username='$username'");
      $rows = mysql_num_rows($query);
      while($row = mysql_fetch_array($query)){
        $rights = $row["Rights"];
      }

	      if($rights >= 1){
		$dir    = 'requests/';
		$files = scandir($dir);
	  $i = 0;
		foreach ($files as &$file) {
	    $i++;
		    if($i > 2){
				  echo '<p>'.$file.'<button type="button" class="deletechat">Delete Chat</button><button class="openchat" type="button" data-toggle="modal" data-target="#tradechatModal">Open Chat </button></p>';
		    }
		}
	}
}
?>