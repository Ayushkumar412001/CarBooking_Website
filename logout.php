<?php

header("Location: /carbook/#");
session_start();
echo "Logging you out. Please wait..";
session_unset();
session_destroy()

?>