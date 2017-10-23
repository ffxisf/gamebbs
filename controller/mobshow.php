<?php
$pid   = intval(Request('Request', 'id'));
$JobArray = array('NONE','WAR','MNK','WHM','BLM','RDM','THF','PLD','DRK','BST','BRD','RNG','SAM','NIN','DRG','SMN','BLU','COR','PUP','DNC','SCH','GEO','RUN');

$mobinfo = array();
$mobinfo = $DB->row('SELECT a.poolid,a.name,a.modelid,a.mJob,a.sJob,a.cmbSkill,a.cmbDelay,a.cmbDmgMult,a.behavior,a.aggro,a.true_detection,a.links,a.mobType,a.immunity,a.name_prefix,a.flag,a.flags,a.animationsub,a.hasSpellScript,a.spellList,a.namevis,a.roamflag,a.skill_list_id, b.* FROM mob_pools a, mob_family_system b WHERE b.familyid = a.familyid AND a.poolid = '.$pid);

$mobfamily = array();
$mobfamily = $DB->query('SELECT * FROM mob_family_mods WHERE familyid = '.$mobinfo['familyid']);

$mobmods = array();
$mobmods = $DB->query('SELECT * FROM mob_pool_mods WHERE poolid = '.$mobinfo['poolid']);

$mobskills = array();
$mobskills = $DB->query('SELECT a.skill_list_name, b.* FROM mob_skill_lists a, mob_skills b WHERE b.mob_skill_id = a.mob_skill_id AND a.skill_list_id = '.$mobinfo['skill_list_id']);

$mobspells = array();
$mobspells = $DB->query('SELECT a.spell_list_name, b.* FROM mob_spell_lists a, spell_list b WHERE b.spellid = a.spell_id AND spell_list_id = '.$mobinfo['spellList']);

$DB->CloseConnection();

$PageTitle = $mobinfo['name'];
$ContentFile = $TemplatePath . 'mobshow.php';
include($TemplatePath . 'layout.php');