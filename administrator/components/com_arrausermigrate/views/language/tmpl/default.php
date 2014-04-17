<?php 
/**
 * ARRA User Export Import component for Joomla! 1.6
 * @version 1.6.0
 * @author ARRA (joomlarra@gmail.com)
 * @link http://www.joomlarra.com
 * @Copyright (C) 2010 - 2011 joomlarra.com. All Rights Reserved.
 * @license GNU General Public License version 2, see LICENSE.txt or http://www.gnu.org/licenses/gpl-2.0.html
 * PHP code files are distributed under the GPL license. All icons, images, and JavaScript code are NOT GPL (unless specified), and are released under the joomlarra Proprietary License, http://www.joomlarra.com/licenses.html
 *
 * file: default.php
 *
 **** class     
 **** functions
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

    $document =& JFactory::getDocument();
    $document->addStyleSheet("components/com_arrausermigrate/css/arra_admin_layout.css");
?>

<form action="index.php" method="post" name="adminForm" id="adminForm">   
    
    <table width="100%" class="adminlist">
		<tr>
			<td width="100%" valign="top">
				<h2><?php echo JText::_( 'ARRA_LANGUAGE_PANEL', true );?> </h2>
				<table width="100" class="adminform"> 
					<tr>
						<td> 
							<textarea style="width:800px !important;" cols="100" rows="25" name="language_file"><?php echo $this->language_file ?></textarea>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table> 	 
   
<input type="hidden" name="option" value="com_arrausermigrate" />
<input type="hidden" name="task" value="language" />
<input type="hidden" name="controller" value="language" />
</form>
