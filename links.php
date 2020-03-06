<?php 
echo"<style>table{font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}
td, th {border: 1px solid #dddddd;text-align: left;padding: 8px;}
tr:nth-child(even){background-color: #dddddd;}</style><table><tr><th>Name</th><th>Link</th></tr>";
foreach (scandir("./") as $value)
{
if($value != "." and $value != ".." and strpos($value,".php") and $value != "post.php" and $value != "links.php")
{
$abc = str_replace(".php","",$value);
echo"<tr><td>".$abc."</td><td><a target=_blank href='./".$value."'>http://". $_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).$value."</a></td></tr>";
}
}
echo "</table>";
?> 
