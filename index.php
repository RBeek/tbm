  <p class="p1">This is ~/Webdev/testsite/index.php</p>
  <br><br>
 
  
  <?php
$myDebugTest = "jibberish";

echo "some $myDebugTest";
echo "<br><br>";

  echo phpinfo();
  
  //echo "what";
   ?>

<?php
/*
$num_entries = 20;
$echo_num_inserts = 5;
$bulk_inserts = 1;
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "redres";
$dbname = "lara";
 
$con = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$con) die('Could not connect: ' . mysql_error());
mysql_select_db($dbname, $con);
 
$result = mysql_query("CREATE TABLE `blogs` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `name` VARCHAR(150) NULL DEFAULT NULL,
  `content` MEDIUMTEXT NULL DEFAULT NULL,
  `user_id` INTEGER NULL DEFAULT NULL,
  `created` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);");
 
$inserts = "";
foreach (range(1,$num_entries) as $i) {
    if (($i % $echo_num_inserts) == 0) echo "$i done.\n";
    $name = rand_string (20);
        $content = rand_string (120);
    $userid = rand(0,100);
    $inserts .= "(0, '$name', '$content', '$userid', now())";
    if (($i % $bulk_inserts) == 0) {
        mysql_query("INSERT INTO blogs (id, name, content, user_id, created) VALUES $inserts");
        $inserts = "";
    } else {
        $inserts .= ", ";
    }
}
 
mysql_close($con);
 
function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";  
    return substr(str_shuffle($chars),0,$length);

}
*/
 
?>