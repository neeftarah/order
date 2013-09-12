<?php
/*
 * @version $Id: bill.tabs.php 530 2011-06-30 11:30:17Z walid $
 LICENSE

 This file is part of the order plugin.

 Order plugin is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Order plugin is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; along with Order. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 @package   order
 @author    the order plugin team
 @copyright Copyright (c) 2010-2011 Order plugin team
 @license   GPLv2+
            http://www.gnu.org/licenses/gpl.txt
 @link      https://forge.indepnet.net/projects/order
 @link      http://www.glpi-project.org/
 @since     2009
 ---------------------------------------------------------------------- */

include ("../../../inc/includes.php");
Html::header($LANG['plugin_order']['title'][1], '', "plugins", "order", "order");

$order = new PluginOrderOrder();
if (PluginOrderOrder::canView() || Session::haveRight("config","w")) {
   Search::show("PluginOrderOrder");
} else {
   echo "<div align='center'><br><br><img src=\"".
      $CFG_GLPI["root_doc"]."/pics/warning.png\" alt=\"warning\"><br><br>";
   echo "<b>".__("Access denied")."</b></div>";
}

Html::footer();

?>