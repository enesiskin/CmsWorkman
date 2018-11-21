<?php header('Content-type: application/xml; charset="utf8"',true);  ?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<!-- Handyman Seo Url Sitemap -->


<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'workman';

$site = $_SERVER["HTTP_HOST"];
$date=date("Y-m-d"); // Bot geldiğinde sistemin zamanı


function seo($url){
$url = trim($url);
$url = strtolower($url);
$find = array('<b>', '</b>');
$url = str_replace ($find, '', $url);
$url = preg_replace('/<(\/{0,1})img(.*?)(\/{0,1})\>/', 'image', $url);
$find = array(' ', '&quot;', '&amp;', '&', '\r\n', '\n', '/', '\\', '+', '<', '>');
$url = str_replace ($find, '-', $url);
$find = array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ë', 'Ê');
$url = str_replace ($find, 'e', $url);
$find = array('í', 'ı', 'ì', 'î', 'ï', 'I', 'İ', 'Í', 'Ì', 'Î', 'Ï');
$url = str_replace ($find, 'i', $url);
$find = array('ó', 'ö', 'Ö', 'ò', 'ô', 'Ó', 'Ò', 'Ô');
$url = str_replace ($find, 'o', $url);
$find = array('á', 'ä', 'â', 'à', 'â', 'Ä', 'Â', 'Á', 'À', 'Â');
$url = str_replace ($find, 'a', $url);
$find = array('ú', 'ü', 'Ü', 'ù', 'û', 'Ú', 'Ù', 'Û');
$url = str_replace ($find, 'u', $url);
$find = array('ç', 'Ç');
$url = str_replace ($find, 'c', $url);
$find = array('ş', 'Ş');
$url = str_replace ($find, 's', $url);
$find = array('ğ', 'Ğ');
$url = str_replace ($find, 'g', $url);
$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
$repl = array('', '-', '');
$url = preg_replace ($find, $repl, $url);
$url = str_replace ('--', '-', $url);
return $url;
}


// Create connection
$conn = new mysqli($server, $user, $password, $db);
mysqli_set_charset($conn,'utf8');


?>


<!-- Menu Bar  -->

<url>
  <loc>http://<?php echo $site; ?>/contact</loc>
  <lastmod><?php echo $date; ?></lastmod>
  <changefreq>daily</changefreq>
  <priority>1.00</priority>
</url>

<url>
  <loc>http://<?php echo $site; ?>/services.php</loc>
  <lastmod><?php echo $date; ?></lastmod>
  <changefreq>daily</changefreq>
  <priority>1.00</priority>
</url>


<!-- Services Sitemap -->

<?php 
$sql = "SELECT * FROM services";
$result = $conn->query($sql);

while($row_services = $result->fetch_assoc()) { ?>


<url>
  <loc>http://<?php echo $site; ?>/view_services/<?php echo seo($row_services["services_name"]); ?>/<?php echo $row_services["services_id"]; ?></loc>
  <lastmod><?php echo $date; ?></lastmod>
  <changefreq>daily</changefreq>
  <priority>1.00</priority>
</url>



<?php } ?>



<?php
$conn->close();
?>
</urlset>

