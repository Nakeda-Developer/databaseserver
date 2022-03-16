<?php

echo shell_exec("ssh -f nakeda@103.66.197.100 -L 3310:localhost:3306 -N");

?>
