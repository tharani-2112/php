<?php
$a = base64_decode( substr($_SERVER["REMOTE_USER"],6)) ;
if ( (strlen($a) == 0) || ( strcasecmp($a, ":" )  == 0 ))
{
   header( 'WWW-Authenticate: Basic realm="Private"' );
   header( 'HTTP/1.0 401 Unauthorized' );
}
else
{
   list($name, $password) = explode(':', $a);
   $_SERVER['PHP_AUTH_USER'] = $name;
   $_SERVER['PHP_AUTH_PW']    = $password;

}

echo 'PHP_AUTH_USER =' . $_SERVER['PHP_AUTH_USER'] . '<br>';
echo 'PHP_AUTH_PW =' . $_SERVER['PHP_AUTH_PW'] . '<br>';
echo 'REMOTE_USER =' . $_SERVER['REMOTE_USER'] . '<br>';
?>