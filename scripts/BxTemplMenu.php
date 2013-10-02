<?php

/***************************************************************************
*                            Dolphin Smart Community Builder
*                              -------------------
*     begin                : Mon Mar 23 2006
*     copyright            : (C) 2007 BoonEx Group
*     website              : http://www.boonex.com
* This file is part of Dolphin - Smart Community Builder
*
* Dolphin is free software; you can redistribute it and/or modify it under
* the terms of the GNU General Public License as published by the
* Free Software Foundation; either version 2 of the
* License, or  any later version.
*
* Dolphin is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
* without even the implied warranty of  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU General Public License for more details.
* You should have received a copy of the GNU General Public License along with Dolphin,
* see license.txt file; if not, write to marketing@boonex.com
***************************************************************************/

bx_import('BxBaseMenu');

/**
* @see BxBaseMenu;
*/
class BxTemplMenu extends BxBaseMenu {

	/**
	* Class constructor;
	*/
	function BxTemplMenu() {
		parent::BxBaseMenu();
	}
	
	function genSubItem( $sCaption, $sLink, $sTarget, $sOnclick, $bActive ) {
		$sClass1_a_l = "tm_cm_item_left_act";		
		$sClass1_a_c = "tm_cm_item_center_act";
		$sClass1_a_r = "tm_cm_item_right_act";

		$sSubItems = '';
		if( !$bActive ) {
			$sOnclick = $sOnclick ? ( ' onclick="' . $sOnclick . '"' ) : '';
			$sTarget  = $sTarget  ? ( ' target="'  . $sTarget  . '"' ) : '';

			if ( strpos( $sLink, 'http://' ) === false && !strlen($sOnclick) )
				$sLink = $this->sSiteUrl . $sLink;

				$sSubItems .= <<<EOF
<td class="usual">
	<div><a class="sublinks" href="{$sLink}" {$sTarget} {$sOnclick}>{$sCaption}</a></div>
</td>
EOF;
			} else {
				$sSubItems .= <<<EOF
<td class="tabbed">
	<table cellspacing="0" cellpadding="0"><tr>
	<td><div class="{$sClass1_a_l}"></div></td>
	<td><div class="{$sClass1_a_c}">{$sCaption}</div></td>
	<td><div class="{$sClass1_a_r}"></div></td>
	</tr></table>
</td>
EOF;
		}
		return $sSubItems;
	}
	
	function genTopHeader() {
		$iCurrent = $this->checkShowCurSub() ? 0 : $this->aMenuInfo['currentTop'];
		$width = $this->sWidth;
		$width = (int)$width - 10;
		$width = $width.'px;';
		$this->sCode .= '<table class="topMenu" cellpadding="0" cellspacing="0" style="width:' . $width . '"><tr>';
	}
	
	
}

// Creating template navigation menu class instance
$oTopMenu = new BxTemplMenu();

?>