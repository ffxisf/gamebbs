<?php
if (!defined('InternalAccess')) exit('error: 403 Access Denied');
?>
<!-- main-content start -->
<div class="main-content">
	<div class="title">
		<a href="<?php echo $Config['WebsitePath']; ?>/">
			<?php echo $Config['SiteName']; ?>
    </a> &raquo; <a href="<?php echo $Config['WebsitePath']; ?>/zones">
        <?php echo $Lang['Game_Maps']; ?>
    </a> &raquo; <?php echo $PageTitle; ?>
	</div>
  
	<div class="main-box home-box-list">
        <table class="mob_table" cellpadding="0" cellspacing="0" border="1">
            <tr>
                <th>名字</th>
                <th>职业</th>
                <th>抵抗</th>
                <th>魔法列表</th>
                <th>TP列表</th>
            </tr>
            <tr>
                <th valign="top"><?php echo $mobinfo['name']; ?></th>
                <th valign="top"><?php echo $JobArray[$mobinfo['mJob']].'/'.$JobArray[$mobinfo['sJob']]; ?></th>
                <th valign="top"><?php 
                  echo $mobinfo['immunity'] & 1 ? '免疫 sleep<br>' : '';
                  echo $mobinfo['immunity'] & 2 ? '免疫 gravity<br>' : '';
                  echo $mobinfo['immunity'] & 4 ? '免疫 bind<br>' : '';
                  echo $mobinfo['immunity'] & 8 ? '免疫 stun<br>' : '';
                  echo $mobinfo['immunity'] & 16 ? '免疫 silence<br>' : '';
                  echo $mobinfo['immunity'] & 32 ? '免疫 paralyze<br>' : '';
                  echo $mobinfo['immunity'] & 64 ? '免疫 blind<br>' : '';
                  echo $mobinfo['immunity'] & 128 ? '免疫 slow<br>' : '';
                  echo $mobinfo['immunity'] & 256 ? '免疫 poison<br>' : '';
                  echo $mobinfo['immunity'] & 512 ? '免疫 elegy<br>' : '';
                  echo $mobinfo['immunity'] & 1024 ? '免疫 requiem' : '';
                ?></th>
                <th valign="top"><?php
                  foreach($mobspells as $spell)
                    echo $spell['name'].($spell['AOE'] ? ' [AOE]' : '').'<br>';
                ?></th>
                <th valign="top"><?php
                  foreach($mobskills as $ms)
                    echo $ms['mob_skill_name'].($ms['mob_skill_aoe'] ? ' [AOE]' : '').'<br>';
                ?></th>
            </tr>
            
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