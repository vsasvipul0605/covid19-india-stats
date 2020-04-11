<?php
$jsonData = file_get_contents("https://api.rootnet.in/covid19-in/stats/latest");
$data = json_decode($jsonData, true);
