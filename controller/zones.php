<?php
$MapsArray = array();
$MapsArray = $DB->query('SELECT name, zoneid FROM  zone_settings WHERE zonetype > 1 ORDER BY name ASC');

$DB->CloseConnection();

$PageTitle = $Lang['Game_Maps'];
$ContentFile = $TemplatePath . 'zones.php';
include($TemplatePath . 'layout.php');