<?php
$session = 'Guest';
$var_str = var_export($session, true);
$var = "<?php\n\n\$session = $var_str;\n\n?>";
file_put_contents('session.php', $var);
header("Location: " . $_SERVER['HTTP_REFERER']);
?>