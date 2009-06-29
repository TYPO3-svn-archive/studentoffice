#
# Table structure for table 'tx_advaddress_persons'
#

CREATE TABLE tx_advaddress_persons (
	matrikelnr tinytext,
	nationality tinytext,
	region int(11) DEFAULT '0' NOT NULL,
	placeofbirth tinytext,
	prevuni tinytext,
	prevmajor tinytext,
	prevdegree tinytext,
	studytyp int(11) DEFAULT '0' NOT NULL,
	department text,
	documents tinyint(3) DEFAULT '0' NOT NULL,
	graddate int(11) DEFAULT '0' NOT NULL,
	maffiliation tinytext,
	msupervisor tinytext,
	mcommitee tinytext,
	msubject tinytext,
	mthesis text,
	mpublications text,
	mdate int(11) DEFAULT '0' NOT NULL,
	paffiliation tinytext,
	psupervisor tinytext,
	pcommitee tinytext,
	psubject tinytext,
	pthesis text,
	ppublications text,
	pdate int(11) DEFAULT '0' NOT NULL,
	pdissertation tinytext,
	pcomment text,
	comment text
);


