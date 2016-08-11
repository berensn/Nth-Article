<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_nth
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="nth<?php echo $moduleclass_sfx; ?>">
	<?php 
	$nth = (int) $params->get('count');
	$nth--;
	$limit = 0;
	foreach ( $list as $item){
		$limit++;
	}
	if ($nth > $limit | $nth < 0){ $nth = 0;}
	$counter = 0;?>
	<?php foreach ($list as $item) : ?>
	<?php 
	
	if ($counter == $nth){
		require JModuleHelper::getLayoutPath('mod_articles_nth', '_item'); 
	}
	$counter++;?>
	<?php endforeach; ?>
	
</div>
