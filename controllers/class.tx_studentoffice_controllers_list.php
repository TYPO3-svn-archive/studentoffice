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


	/*
	 * List-View
	 */
	function showStudentListAction() {	
		t3lib_div::devLog('showStudentListAction: Start','studentoffice',-1);
		t3lib_div::devLog('Configurations','studentoffice',0,$this->configurations->getArrayCopy());
		if($this->parameters['action'] == 'showstudent' ){
			return $this->showstudentAction();
		}	
		$modelClassName = tx_div::makeInstanceClassName('tx_studentoffice_models_students');
		$entryViewClassName = tx_div::makeInstanceClassName('tx_studentoffice_views_student');
		$listViewClassName = tx_div::makeInstanceClassName('tx_studentoffice_views_studentlist');
		$translatorClassName = tx_div::makeInstanceClassName('tx_lib_translator');
		$model = new $modelClassName($this);
		$model->controller($this);
		$department = $this->configurations['department'];		
		$dateStart = $this->configurations['datestart'];
		$dateEnd = $this->configurations['dateend'];
		$status = $this->configurations['status'];
		$statusType = $this->configurations['studenttype'];
		$storageFolder = $this->configurations['storageFolder'];
		//st3lib_div::debug($dateStart,'exampleAction');
		$model->loadStudentList($department, $status,$statusType,$dateStart,$dateEnd,$storageFolder);
		$view = new $listViewClassName($this);
		$view->controller($this);
		for($model->rewind(); $model->valid(); $model->next()) {			
			$entry = new $entryViewClassName($model->current());
			$entry->controller($this);
			//t3lib_div::debug($entry,'exampleAction');
			$view->append($entry);
		}	
		if($this->configurations['controller'] == 'masterListView'){
			$view->render($this->configurations['masterListTemplate']);
		}elseif($this->configurations['controller'] == 'masterAlumniListView'){
			$view->render($this->configurations['masterAlumniListTemplate']);
		}elseif($this->configurations['controller'] == 'phdAlumniListView'){
			$view->render($this->configurations['phdAlumniListTemplate']);
		}else{
			$view->render($this->configurations['simpleListTemplate']);
		}
		$translator = new $translatorClassName($view);
		$translator->setPathToLanguageFile($this->configurations['pathToLanguageFile']);
		t3lib_div::devLog('showStudentListAction: End','studentoffice',-1);
		return $translator->translateContent();
	}	
	
	/*
	 * Single-View
	 */
	function showstudentAction() {		
		$modelClassName = tx_div::makeInstanceClassName('tx_studentoffice_models_students');
		$entryViewClassName = tx_div::makeInstanceClassName('tx_studentoffice_views_student');
		$translatorClassName = tx_div::makeInstanceClassName('tx_lib_translator');
		$model = new $modelClassName($this);
		$model->controller($this);
		//$storageFolder = $this->configurations['storageFolder'];
		
		$model->loadByUid((int) $this->parameters->get('studentid'));
		//t3lib_div::debug($model->current(),'student');
		$view = new $entryViewClassName($model->current());					
		$view->controller($this);
		$view->setPathToTemplateDirectory($this->configurations['pathToTemplateDirectory']);
		if($this->parameters->get('template') == 'phdAlumni'){
			$view->render($this->configurations['phdAlumniSingleTemplate']);
		}elseif($this->parameters->get('template')  == 'masterAlumni'){
			$view->render($this->configurations['masterAlumniSingleTemplate']);
		}else{
			$view->render($this->configurations['singleViewTemplate']);
		}
		$translator = new $translatorClassName($view);
		$translator->setPathToLanguageFile($this->configurations['pathToLanguageFile']);
		return $translator->translateContent();
	}	

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/studentoffice/controllers/class.tx_studentoffice_controllers_list.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/studentoffice/controllers/class.tx_studentoffice_controllers_list.php']);
}
?>
