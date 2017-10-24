<?php
if (!defined('InternalAccess')) exit('error: 403 Access Denied');
?>
<!-- main-content start -->
<div class="main-content">
	<div class="title">
		<a href="<?php echo $Config['WebsitePath']; ?>/">
			<?php echo $Config['SiteName']; ?>
		</a> &raquo;
    <a href="<?php echo $Config['WebsitePath']; ?>/zones">
        <?php echo $Lang['Game_Maps']; ?>
    </a> &raquo; <?php echo $PageTitle; ?>
	</div>
	<div class="main-box home-box-list">
	    <table class="mob_table" cellpadding="0" cellspacing="0" border="1">
            <tr>
                <th height="30px">名字</th>
                <th>职业</th>
                <th>等级</th>
                <th>HP/MP</th>
                <th>复活时间</th>
            </tr>
<?php
foreach ($MobsArray as $mob) {
?>
    <tr class="mob_list<?php if($mob['mobType']>=2) echo ' isNM'; ?>">
        <td>
          <a href="/mobshow/<?php echo $mob['poolid']; ?>"><?php echo $mob['name']; ?></a> 
          <a class="btn-link" target="_blank" href="http://ffxiclopedia.wikia.com/wiki/<?php echo $mob['name']; ?>">wiki</a>
        </td>
        <td><?php echo $JobArray[$mob['mJob']].'/'.$JobArray[$mob['sJob']]; ?></td>
        <td><?php echo $mob['minLevel'].'~'.$mob['maxLevel']; ?></td>
        <td><?php echo $mob['HP'].'HP/'.$mob['MP'].'MP'; ?></td>
        <td><?php echo $mob['spawntype'] == 128 ? '特殊复活' : intval($mob['respawntime']/60).'分钟'; ?></td>
    </tr>
<?php
}
?>
        </table>
        <div class="c"></div>
        <div class="pagination">
          <div class="c"></div>
        </div>
	</div>
</div>
<!-- main-content end -->
<!-- main-sider start -->
<div class="main-sider">
<?php
include($TemplatePath.'sider.php');
?>
</div>
<!-- main-sider end -->