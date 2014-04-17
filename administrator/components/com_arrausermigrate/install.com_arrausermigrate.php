<?php
function com_install(){
	$db =& JFactory::getDBO();
	$sql = "CREATE TABLE IF NOT EXISTS `#__arra_users_profile` (
			  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
			  `name` varchar(255) NOT NULL,
			  `type` varchar(255) NOT NULL,
			  `field_id` varchar(255) NOT NULL,
			  `description` text NOT NULL,
			  `filter` varchar(255) NOT NULL,
			  `label` varchar(255) NOT NULL,
			  `message` varchar(255) NOT NULL,
			  `cols` int(3) NOT NULL,
			  `rows` int(3) NOT NULL,
			  `option` text NOT NULL,
			  `size` int(3) NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
	$db->setQuery($sql);
	$db->query();
	
	$table  = "";
	$table .= "<table>";
	$table .= 		"<tr>";
	$table .= 			"<td>";
	$table .= 				"<img src=\"components/com_arrauserexportimport/images/logo_arra_user_export.png\"/>";
	$table .= 			"</td>";
	$table .= 			"<td>";
	$table .= 				"<b>Successfully installed ARRA User Export Import."."</b><br /><br />";
	$table .= 				"You can now use the component to export users from your current Joomla installation or to import users into your website (available formats: csv, txt, html, sql, zip)."."<br /><br />";
	$table .= 				"Useful links:"."<br /><br />";
	$table .= 				"Forum -> <a href=\"http://www.joomlarra.com/forum\" target=\"_blank\">http://www.joomlarra.com/forum"."</a><br/>".
							"Documentation -> <a href=\"http://www.joomlarra.com/joomla-1.7-user-export-import-documentation/\" target=\"_blank\">http://www.joomlarra.com/joomla-1.7-user-export-import-documentation/"."</a><br/>".
							"Report bugs -> <a href=\"http://www.joomlarra.com/11-report-bugs/\" target=\"_blank\">http://www.joomlarra.com/11-report-bugs/"."</a><br/>".
							"Request new feature -> <a href=\"http://www.joomlarra.com/12-feature-request/\" target=\"_blank\">http://www.joomlarra.com/12-feature-request/</a>";
	$table .= 			"</td>";
	$table .= 		"</tr>";
	$table .= "</table>";
	echo $table;
}
?>