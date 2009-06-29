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

 tx_div::load('tx_lib_object');

class tx_studentoffice_models_students extends tx_lib_object {
	
	// Constructor
	/*
	function tx_studentoffice_models_students() {
		parent::tx_lib_object();
	}
	*/
	
	function loadStudentList($status, $statusType, $dateStart, $dateEnd, $storageFolder){
		$fields = '*';
		$tables = 'tx_advaddress_persons, tx_advaddress_status';
		$groupBy = null;
		$orderBy = 'lastname ASC';
		$where = '(tx_advaddress_persons.uid = tx_advaddress_status.parentid)';
		$where .= ' AND (tx_advaddress_status.status = '.$status.') AND (tx_advaddress_status.statustype = '.$statusType.')';
		$where .= ' AND (tx_advaddress_status.statusdate > '.$dateStart.') AND (tx_advaddress_status.statusdate < '.$dateEnd.')';
		$where .= ' AND (tx_advaddress_persons.pid = '.$storageFolder.')';
		if($status == 3){
			$where .= ' AND (tx_advaddress_persons.hidden = 0)';
		}		
		if( ($status != 1) AND ($status != 4) ){
			$where .= ' AND (tx_advaddress_persons.deleted = 0) ';
		}		
		$limit = null;
		$query = $GLOBALS['TYPO3_DB']->SELECTquery($fields, $tables, $where, $groupBy, $orderBy, $limit);
		$res = $GLOBALS['TYPO3_DB']->sql_query($query);
		if($res){
			//t3lib_div::debug($entry,'loadAll');
			$entries = $this->_exportList($this->_makeList($res));
			for($entries->rewind(); $entries->valid(); $entries->next()){
				$this->append($entries->current());
			}
		}
	}	
	

	function _exportRow($row){
		if(is_object($row)){
			//Insert Output-Manipulation
			//$categoryLoader =& $this->categoryLoader();
			//$row->set('category', $categoryLoader->get($row->get('category')));

			return $row;
		}
	}

	function _makeRow($result){
		if($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result)){
			return new tx_lib_object($row);
		}
	}

	function _makeList($result){
		$list = new tx_lib_object(array());
		while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result)){
			$list->append(new tx_lib_object($row));
		}
		return $list;
	}

	function _exportList($list){
		if(is_object($list)){
			for($list->rewind(); $list->valid(); $list->next()){
				$list->set($list->key(), $this->_exportRow($list->current()));
			}
			$list->rewind();
			return $list;
		}
	}	
	
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/studentoffice/models/class.tx_studentoffice_models_students.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/studentoffice/models/class.tx_studentoffice_models_students.php']);
}
?>
