<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

/*
$TCA["tx_advaddress_persons"] = Array (
	"ctrl" => $TCA["tx_advaddress_persons"]["ctrl"],
	"interface" => Array (
		"showRecordFieldList" => "hidden,firstname,middlename,lastname,title,letter_title,gender,birthday,picture,note,employer,addresses,type"
	),
	"feInterface" => $TCA["tx_advaddress_persons"]["feInterface"],
	"columns" => Array (
		"hidden" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:lang/locallang_general.xml:LGL.hidden",
			"config" => Array (
				"type" => "check",
				"default" => "0"
			)
		),
		"type" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.type",
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.type.I.0", "0"),
					Array("LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.type.I.1", "1"),
				),
				"size" => 1,
				"maxitems" => 1,
			)
		),
		"firstname" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.firstname",
			"config" => Array (
				"type" => "input",
				"size" => "30",
			)
		),
		"middlename" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.middlename",
			"config" => Array (
				"type" => "input",
				"size" => "30",
			)
		),
		"lastname" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.lastname",
			"config" => Array (
				"type" => "input",
				"size" => "30",
			)
		),
		"title" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.title",
			"config" => Array (
				"type" => "input",
				"size" => "30",
			)
		),
		"letter_title" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.letter_title",
			"config" => Array (
				"type" => "input",
				"size" => "30",
			)
		),
		"gender" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.gender",
			"config" => Array (
				"type" => "radio",
				"items" => Array (
					Array("LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.gender.I.0", "0"),
					Array("LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.gender.I.1", "1"),
				),
			)
		),
		"birthday" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.birthday",
			"config" => Array (
				"type" => "input",
				"size" => "10",
				"max" => "10",
			)
		),
		"picture" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.picture",
			"config" => Array (
				"type" => "group",
				"internal_type" => "file",
				"allowed" => $GLOBALS["TYPO3_CONF_VARS"]["GFX"]["imagefile_ext"],
				"max_size" => 500,
				"uploadfolder" => "uploads/tx_advaddress",
				"show_thumbs" => 1,
				"size" => 3,
				"minitems" => 0,
				"maxitems" => 10,
			)
		),
		"note" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.note",
			"config" => Array (
				"type" => "text",
				"cols" => "30",
				"rows" => "5",
			)
		),
		"employer" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.employer",
			"config" => Array (
				"type" => "inline",
				"foreign_table" => "tx_advaddress_staff",
				"foreign_field" => "personid",
				"foreign_sortby" => "personsort",
				"foreign_label" => "companyid",
				"maxitems" => 10,
			)
		),
		"addresses" => Array (
			"exclude" => 1,
			"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.addresses",
			"config" => Array (
				"type" => "inline",
				"foreign_table" => "tx_advaddress_addresses",
				"foreign_field" => "parentid",
				"foreign_table_field" => "parenttable",
				"maxitems" => 10,
			)
		),
		"status" => Array (
		"exclude" => 1,
		"label" => "LLL:EXT:adv_address/locallang_db.xml:tx_advaddress_persons.status",
		"config" => Array (
				"type" => "inline",
				"foreign_table" => "tx_advaddress_status",
				"foreign_field" => "parentid",
				"foreign_table_field" => "parenttable",
				"foreign_label" => "status",
				"maxitems" => 10,
			)
		),
	),
	"types" => Array (
		"0" => Array("showitem" => "hidden;;1;;1-1-1, type, firstname, middlename, lastname, title;;;;2-2-2, letter_title;;;;3-3-3, gender, birthday, picture, note, employer, addresses, status")
	),
	"palettes" => Array (
		"1" => Array("showitem" => "")
	)
);


*/





?>