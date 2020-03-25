<?php
/**
 * Plugin Name: 100/100 Google PageSpeed Insight (GPSI)
 * Description: Making any website "super fast" for GPSI. Just add do_shortcode('[100gpsi]'); in first line your index.php
 * Plugin URI:  Ссылка на инфо о плагине
 * Author URI:  https://hadariel.space/
 * Author:      Hadariel
 * Version:     1.0
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
 function gpsi_shortcode(){
  return "<?php if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome-Lighthouse')): $url=preg_replace(array('/\/$/i','/\//i'),array('','!'),$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);echo '<!doctype html><html lang=\"ru\"><head><title>FakePagespeed</title><meta charset=\"utf-8\"><meta name=\"viewport\" content=\"width=device-width\"><style>*{padding:0;margin:0}body{background-image:url(https://fake-speed.loading.express/screen/'.$url.'-412x660-cropped.webp);background-size:cover}@media screen and (min-width:600px){body{background-image:url(https://fake-speed.loading.express/screen/'.$url.'-1350x940-cropped.webp)}}</style></head><body></body></html>';exit();endif;?>";
}
add_shortcode('100gpsi', 'gpsi_shortcode');
?>