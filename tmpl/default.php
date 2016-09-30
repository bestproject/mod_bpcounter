<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 BestProject, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Including fallback code for the placeholder attribute in the search field.
JHtml::_('jquery.framework');

$doc = JFactory::getDocument();
$doc->addScript('modules/mod_bpcounter/assets/counter.min.js');
$doc->addScriptDeclaration('
    jQuery(document).ready(function($){
        $("#modbpcounter-'.$module->id.' .number").animateCounter();
    });
');
?>
<div class="modbpcounter <?php echo $moduleclass_sfx ?>" id="modbpcounter-<?php echo $module->id ?>">
	<span class="number" data-time="<?php echo (int)$time ?>"><?php echo $number ?></span>
    <?php if( $label!=='' ): ?>
    <h4 class="label"><?php echo $label ?></h4>
    <?php endif ?>
</div>

