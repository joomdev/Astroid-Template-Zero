<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_config
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

$positions = $this->model->getPositions();

// Add custom position to options
$customGroupText = Text::_('COM_MODULES_CUSTOM_POSITION');

// Build field
$attr = array(
	'id'          => 'jform_position',
	'list.select' => $this->item['position'],
	'list.attr'   => 'class="chzn-custom-value" '
		. 'data-custom_group_text="' . $customGroupText . '" '
		. 'data-no_results_text="' . Text::_('COM_MODULES_ADD_CUSTOM_POSITION') . '" '
		. 'data-placeholder="' . Text::_('COM_MODULES_TYPE_OR_SELECT_POSITION') . '" '
);

echo HTMLHelper::_('select.groupedlist', $positions, 'jform[position]', $attr);
