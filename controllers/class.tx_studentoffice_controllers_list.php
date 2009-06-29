<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Sven Kalbhenn
 *  Contact: sven@skom.de
 *  All rights reserved
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 ***************************************************************/

/**
 * Depends on:
 *
 * @author Sven Kalbhenn <sven@skom.de>
 * @package TYPO3
 * @subpackage studentoffice
 */
class tx_studentoffice_controllers_list extends tx_lib_controller{

	var $defaultAction = 'showStudentListAction';

	function showStudentListAction() {
		
		//----------------------------------------------------------------------
		// IMPORTANT: Always set the controller ($this) to controlled objects!!!
		//            Please have a look at the constructor of tx_lib_object.
		//----------------------------------------------------------------------
		
		$modelClassName = tx_div::makeInstanceClassName('tx_studentoffice_models_students');
		$entryViewClassName = tx_div::makeInstanceClassName('tx_studentoffice_views_student');
		$listViewClassName = tx_div::makeInstanceClassName('tx_studentoffice_views_studentlist');
		$model = new $modelClassName($this);
		$model->controller($this);		
		$dateStart = $this->configurations['datestart'];
		$dateEnd = $this->configurations['dateend'];
		$status = $this->configurations['status'];
		$statusType = $this->configurations['studenttype'];
		$storageFolder = $this->configurations['storageFolder'];
		//st3lib_div::debug($dateStart,'exampleAction');
		$model->loadStudentList($status,$statusType,$dateStart,$dateEnd,$storageFolder);
		$view = new $listViewClassName($this);
		$view->controller($this);
		for($model->rewind(); $model->valid(); $model->next()) {			
			$entry = new $entryViewClassName($model->current());
			$entry->controller($this);
			//t3lib_div::debug($entry,'exampleAction');
			$view->append($entry);
		}	
		return $view->render($this->configurations['studentListTemplate']);

	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/studentoffice/controllers/class.tx_studentoffice_controllers_list.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/studentoffice/controllers/class.tx_studentoffice_controllers_list.php']);
}
?>
