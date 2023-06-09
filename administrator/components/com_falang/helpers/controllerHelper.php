<?php
/**
 * @package     Falang for Joomla!
 * @author      Stéphane Bouey <stephane.bouey@faboba.com> - http://www.faboba.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @copyright   Copyright (C) 2010-2017. Faboba.com All rights reserved.
 */

// No direct access to this file
defined('_JEXEC') or die;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Plugin\PluginHelper;

class  FalangControllerHelper  {

	/**
	 * Sets up ContentElement Cache - mainly used for data to determine primary key id for tablenames ( and for
	 * future use to allow tables to be dropped from translation even if contentelements are installed )
	 */
	static function _setupContentElementCache()
	{
		$db = JFactory::getDBO();
		// Make usre table exists otherwise create it.
		$db->setQuery( "CREATE TABLE IF NOT EXISTS `#__falang_tableinfo` ( `id` int(11) NOT NULL auto_increment, `joomlatablename` varchar(100) NOT NULL default '',  `tablepkID`  varchar(100) NOT NULL default '', PRIMARY KEY (`id`)) ENGINE=MyISAM");
		$db->execute();
		// clear out existing data
		$db->setQuery( "DELETE FROM `#__falang_tableinfo`");
		$db->execute();
		$falangManager = FalangManager::getInstance();
		$contentElements = $falangManager->getContentElements(true);
		$sql = "INSERT INTO `#__falang_tableinfo` (joomlatablename,tablepkID) VALUES ";
		$firstTime = true;
		foreach ($contentElements as $key => $jfElement){
			$tablename = $jfElement->getTableName();
			$refId = $jfElement->getReferenceID();
			$sql .= $firstTime?"":",";
			$sql .= " ('".$tablename."', '".$refId."')";
			$firstTime = false;
		}

		$db->setQuery( $sql);
		$db->execute();

	}


	public static function _checkDBCacheStructure (){

        //TODO : sbou revoir la methode de cache
        return true;
/*
		JCacheStorageJfdb::setupDB();

		$db =  JFactory::getDBO();
		$sql = "SHOW COLUMNS FROM #__dbcache LIKE 'value'";
		$db->setQuery($sql);
		$data = $db->loadObject();
		if (isset($data) && strtolower($data->Type)!=="mediumblob"){
			$sql = "DROP TABLE #__dbcache";
			$db->setQuery($sql);
			$db->query();

			JCacheStorageJfdb::setupDB();
		}
*/
	}

	public static function _checkDBStructure (){
		$db =  JFactory::getDBO();
		$sql = "SHOW INDEX FROM #__falang_content";// where key_name = 'jfContent'";
		$db->setQuery($sql);
		$data = $db->loadObjectList("Key_name");

        if (isset($data['combo'])){
            $sql = "ALTER TABLE `#__falang_content` DROP INDEX `combo`" ;
            $db->setQuery($sql);
            $db->execute();
        }
        if (!isset($data['idxFalang1'])){

            $sql = "ALTER TABLE `#__falang_content` ADD INDEX `idxFalang1` ( `reference_id` , `reference_field` , `reference_table` )" ;
            $db->setQuery($sql);
            $db->execute();
        }

		if (!isset($data['falangContent'])){
			$sql = "ALTER TABLE `#__falang_content` ADD INDEX `falangContent` ( `language_id` , `reference_id` , `reference_table` )" ;
			$db->setQuery($sql);
			$db->execute();
		}

        if (!isset($data['falangContentLanguage'])){
            $sql = "ALTER TABLE `#__falang_content` ADD INDEX `falangContentLanguage` (`reference_id`, `reference_field`, `reference_table`, `language_id`)" ;
            $db->setQuery($sql);
            $db->execute();
        }

		if (!isset($data['reference_id'])){
			$sql = "ALTER TABLE `#__falang_content` ADD INDEX `reference_id` (`reference_id`)" ;
			$db->setQuery($sql);
			$db->execute();
        }
        if (!isset($data['language_id'])){
            $sql = "ALTER TABLE `#__falang_content` ADD INDEX `language_id` (`language_id`)" ;
            $db->setQuery($sql);
            $db->execute();
        }
        if (!isset($data['reference_table'])){
            $sql = "ALTER TABLE `#__falang_content` ADD INDEX `reference_table` (`reference_table`)" ;
            $db->setQuery($sql);
            $db->execute();
        }
        if (!isset($data['reference_field'])){
            $sql = "ALTER TABLE `#__falang_content` ADD INDEX `reference_field` (`reference_field`)" ;
            $db->setQuery($sql);
            $db->execute();
        }
	}

	/**
	 * Check Plugin Order since Joomla 3.6.2, language filter need to be set before FalangDatabaseDriver plgin
	 *
	 * @since 2.7.0
     * @since 4.5   add message to have admintools (if installed) ,fields , language filter , falangdriver order
     *              Check Plugin System Fields (need to be ordered befor Falang Driver plugin
     *              Necessary for Categories field translation
     *
	 */

	public static function _reorderPlugin(){

		$db     = Factory::getDbo();
		$query  = $db->getQuery(true);

		//language filter must be before falang database driver
		$query->select('extension_id,element,ordering ');
		$query->from('#__extensions');

		$query->where($query->quoteName('type') . '=' . $query->quote('plugin'));
		$query->where($query->quoteName('folder') . '=' . $query->quote('system'));
		$query->where($query->quoteName('element') . 'IN ("admintools","languagefilter","fields","falangdriver")');
		$query->order('ordering ASC');

		$db->setQuery($query);
		$list = $db->loadObjectList('element');
        if (  (int)$list['fields']->ordering >=  (int)$list['falangdriver']->ordering ||
              (int)$list['languagefilter']->ordering >=  (int)$list['falangdriver']->ordering){
            if (isset($list)) {
                $idx = 0;

                if (isset($list['admintools'])) {
                    $pks[] = (int)$list['admintools']->extension_id;
                    $order[] = $idx;
                    $idx = $idx + 1;
                }
                if (isset($list['languagefilter'])) {
                    $pks[] = (int)$list['languagefilter']->extension_id;
                    $order[] = $idx;
                    $idx = $idx + 1;
                }
                if (isset($list['fields'])) {
                    $pks[] = (int)$list['fields']->extension_id;
                    $order[] = $idx;
                    $idx = $idx + 1;
                }
                if (isset($list['falangdriver'])) {
                    $pks[] = (int)$list['falangdriver']->extension_id;
                    $order[] = $idx;
                    $idx = $idx + 1;
                }

    //			if ((int)$list['languagefilter']->ordering >=  (int)$list['falangdriver']->ordering){
                //we have to fix the order
    //				$pks = array((int)$list['languagefilter']->extension_id,(int)$list['falangdriver']->extension_id);
                //set order to 1 and 2 - other plugin set to -1 stay at -1
    //				$order = array(1,2);

                $pluginsModel = JModelLegacy::getInstance('Plugin', 'PluginsModel');

                // Save the ordering
                //sbou4 descatived the saveorder
                $return = $pluginsModel->saveorder($pks, $order);

                $application = JFactory::getApplication();
                if ($return === false) {
                    Factory::getApplication()->enqueueMessage(Text::_('COM_FALANG_PLUGINS_SYSTEM_ORDER_FAILED'), 'error');
                } else {
                    Factory::getApplication()->enqueueMessage(Text::_('COM_FALANG_PLUGINS_SYSTEM_ORDER_FIXED'), 'notice');

                    // Reset the Joomla! plugins cache ?
                }
            }
		}

	}

}
