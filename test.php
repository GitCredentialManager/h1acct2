<?php

header("HTTP/1.1 307 Temporary Redirect");

header("Location: http://169.254.169.254/latest/meta-data/");

exit();

?>