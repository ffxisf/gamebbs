<?php
$ID   = intval(Request('Request', 'id'));
$JobArray = array('NONE','WAR','MNK','WHM','BLM','RDM','THF','PLD','DRK','BST','BRD','RNG','SAM','NIN','DRG','SMN','BLU','COR','PUP','DNC','SCH','GEO','RUN');
$MobsArray = array();
$MobsArray = $DB->query('SELECT a.groupid, a.poolid, a.respawntime, a.spawntype, a.HP, a.MP, a.minLevel, a.maxLevel, b.name, b.mJob, b.sJob, b.mobType FROM mob_groups a, mob_pools b WHERE b.poolid = a.poolid AND a.zoneid = '.$ID.' ORDER BY b.name ASC');

$row = $DB->query('SELECT name FROM zone_settings WHERE zoneid='.$ID);

$DB->CloseConnection();

$PageTitle = $row[0]['name'];
$ContentFile = $TemplatePath . 'zone.php';
include($TemplatePath . 'layout.php');