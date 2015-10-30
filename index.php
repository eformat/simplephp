<?php

echo "The All Blacks will win the world cup !";
$IP = isset($_SERVER['SERVER_ADDR'])?$_SERVER['SERVER_ADDR']:gethostbyname(gethostname());
echo "ServerIP: ", $IP;
