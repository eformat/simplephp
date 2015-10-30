<?php

$IP = isset($_SERVER['SERVER_ADDR'])?$_SERVER['SERVER_ADDR']:gethostbyname(gethostname());
echo "The All Blacks will win the world cup ! - ServerIP: ", $IP, "\n";

