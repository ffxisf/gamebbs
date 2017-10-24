<?php
if (!defined('InternalAccess')) exit('error: 403 Access Denied');
?>
<!-- main-content start -->
<div class="main-content">
	<div class="title">
		<a href="<?php echo $Config['WebsitePath']; ?>/">
			<?php echo $Config['SiteName']; ?>
		</a> &raquo; <?php echo $Lang['Game_Maps']; ?>
	</div>
	<div class="main-box home-box-list">
	
<?php
foreach ($MapsArray as $map) {
?>
  <div class="zone_list"><a href="/zone/<?php echo $map['zoneid']; ?>" ><?php echo $map['name']; ?></a></div>
<?php
}
?>
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