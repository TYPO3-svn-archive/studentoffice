<?php

/**
 * A most minimalistic view of the lib/div type
 *
 * This is just a hello world example.
 * For a minimal practical example see the extension Bananas (bananas).
 * For a bigger practical example see the extension Elmar's FAQ (efaq).
 */
class tx_studentoffice_views_student extends tx_lib_phpTemplateEngine {
	
	/*
	 * Print the Student-Image
	 */
	function printStudentImg(){
		$_img = $this->get('picture');
		if($_img != ''){
			$_imgArray = explode(',',$_img);
			$_img = $_imgArray[0];
			$imageClassName = tx_div::makeInstanceClassName('tx_lib_image');
			$image = new $imageClassName();
			$image->alt($this->get('lastname'));
			$image->width(130);
			if(is_file($this->controller->configurations['imageFolder'].$_img)){
				$image->path($this->controller->configurations['imageFolder'].$_img);
			}elseif(is_file('uploads/tx_advaddress/'.$_img)){
				$image->path('uploads/tx_advaddress/'.$_img);
			}		
			echo $image->make();
			//print_r($image);
			//echo $this->controller->configurations['imageFolder'].$_img;
		}else{
			echo 'No picture';
		}		
	}
	
	
	/*
	 * Print the Student-Name
	 * with Link to Detail-Page 
	 */
	function printLinkedName($template=NULL){
		$_name = $this->get('lastname').', '.$this->get('firstname');
		$link = tx_div::makeInstance('tx_lib_link');
		$link->label($_name);
		$link->destination($this->controller->configurations->get('detailPage'));
		//$link->destination($this);
		$link->designator($this->getDesignator());
		$link->noHash();
		if($template != NULL) {
			$link->parameters(array('action' => 'showstudent', 'studentid' => $this->get('parentid'), 'template' => $template));
		}else {
			$link->parameters(array('action' => 'showstudent', 'studentid' => $this->get('parentid')));
		}
		print $link->makeTag();
	}	
	
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/studentoffice/views/class.tx_studentoffice_views_student.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/studentoffice/views/class.tx_studentoffice_views_student.php']);
}
?>
