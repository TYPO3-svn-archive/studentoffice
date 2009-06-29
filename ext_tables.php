<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	'matrikelnr' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.matrikelnr',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'nationality' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.nationality',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'region' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.region',
		'config' => array (
			'type' => 'select',
			'items' => array (
				array('LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.region.I.0', '0'),
				array('LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.region.I.1', '1'),
				array('LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.region.I.2', '2'),
				array('LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.region.I.3', '3'),
				array('LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.region.I.4', '4'),
				array('LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.region.I.5', '5'),
				array('LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.region.I.6', '6'),
				array('LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.region.I.7', '7'),
			),
			'size' => 1,
			'maxitems' => 1,
		)
	),
	'placeofbirth' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.placeofbirth',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'prevuni' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.prevuni',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'prevmajor' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.prevmajor',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'prevdegree' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.prevdegree',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'studytyp' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.studytyp',
		'config' => array (
			'type' => 'select',
			'items' => array (
				array('LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.studytyp.I.0', '0'),
				array('LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.studytyp.I.1', '1'),
			),
			'size' => 1,
			'maxitems' => 1,
		)
	),
	'department' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.department',
		'config' => array (
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'tx_uniseminars_department',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
		)
	),
	'documents' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.documents',
		'config' => array (
			'type' => 'check',
		)
	),
	'graddate' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.graddate',
		'config' => array (
			'type'     => 'input',
			'size'     => '8',
			'max'      => '20',
			'eval'     => 'date',
			'checkbox' => '0',
			'default'  => '0'
		)
	),
	'maffiliation' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.maffiliation',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'msupervisor' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.msupervisor',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'mcommitee' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.mcommitee',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'msubject' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.msubject',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'mthesis' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.mthesis',
		'config' => array (
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
					'icon'          => 'wizard_rte2.gif',
					'script'        => 'wizard_rte.php',
				),
			),
		)
	),
	'mpublications' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.mpublications',
		'config' => array (
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
					'icon'          => 'wizard_rte2.gif',
					'script'        => 'wizard_rte.php',
				),
			),
		)
	),
	'mdate' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.mdate',
		'config' => array (
			'type'     => 'input',
			'size'     => '8',
			'max'      => '20',
			'eval'     => 'date',
			'checkbox' => '0',
			'default'  => '0'
		)
	),
	'paffiliation' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.paffiliation',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'psupervisor' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.psupervisor',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'pcommitee' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.pcommitee',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'psubject' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.psubject',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'pthesis' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.pthesis',
		'config' => array (
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
					'icon'          => 'wizard_rte2.gif',
					'script'        => 'wizard_rte.php',
				),
			),
		)
	),
	'ppublications' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.ppublications',
		'config' => array (
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
			'wizards' => array(
				'_PADDING' => 2,
				'RTE' => array(
					'notNewRecords' => 1,
					'RTEonly'       => 1,
					'type'          => 'script',
					'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
					'icon'          => 'wizard_rte2.gif',
					'script'        => 'wizard_rte.php',
				),
			),
		)
	),
	'pdate' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.pdate',
		'config' => array (
			'type'     => 'input',
			'size'     => '8',
			'max'      => '20',
			'eval'     => 'date',
			'checkbox' => '0',
			'default'  => '0'
		)
	),
	'pdissertation' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.pdissertation',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'pcomment' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.pcomment',
		'config' => array (
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
		)
	),
	'comment' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:studentoffice/locallang_db.xml:tx_advaddress_persons.comment',
		'config' => array (
			'type' => 'text',
			'cols' => '30',
			'rows' => '5',
		)
	),
);

t3lib_div::loadTCA('tx_advaddress_persons');
t3lib_extMgm::addTCAcolumns('tx_advaddress_persons',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tx_advaddress_persons','matrikelnr;;;;1-1-1, nationality, region, placeofbirth, prevuni, prevmajor, prevdegree, studytyp, department, documents, graddate, maffiliation, msupervisor, mcommitee, msubject, mthesis;;;richtext[]:rte_transform[mode=ts], mpublications;;;richtext[]:rte_transform[mode=ts], mdate, paffiliation, psupervisor, pcommitee, psubject, pthesis;;;richtext[]:rte_transform[mode=ts], ppublications;;;richtext[]:rte_transform[mode=ts], pdate, pdissertation, pcomment, comment');


t3lib_extMgm::addStaticFile('studentoffice', './configurations', 'Student-Office123');
t3lib_extMgm::addPlugin(Array('LLL:EXT:studentoffice/locallang_db.php:listPluginLabel','tx_studentoffice_list'),'list_type');
$TCA['tt_content']['types']['list']['subtypes_excludelist']['tx_studentoffice_list']='layout,select_key,pages,recurs';
$TCA['tt_content']['types']['list']['subtypes_addlist']['tx_studentoffice_list']='pi_flexform';
t3lib_extMgm::addPiFlexFormValue('tx_studentoffice_list', 'FILE:EXT:studentoffice/configurations/flexform_list.xml');



?>
