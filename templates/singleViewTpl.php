<?php if (!defined ('TYPO3_MODE')) 	die ('Access denied.'); ?>
<?php
/*******************************************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Sven Kalbhenn
 *  Contact: sven@skom.de
 *  All rights reserved
 *
 *  If you ar not familiar with php-Templates, you can find a documentation here:
 *  http://typo3.org/documentation/document-library/extension-manuals/lib/0.0.20/view/1/5/
 *******************************************************************************************/
 ?>

 
 <?php if($this->isNotEmpty()): ?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="studentList">
		<tr>
			<td rowspan="6" class="student_links" valign="top">
				<?php $this->printStudentImg(); ?>
			</td>
			<td class="student_rechts" valign="top">
				%%%name%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php //t3lib_div::debug($entry,'exampleAction'); ?>
				<strong><?php $this->printAsText('lastname'); ?>, <?php $this->printAsText('firstname'); ?></strong>
			</td>
		</tr>
		<tr>
			<td class="student_rechts" valign="top">
				%%%citizenship%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php $this->printAsText('nationality'); ?>
			</td>
		</tr>
		<tr>
			<td class="student_rechts" valign="top">
				%%%affiliation%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php $this->printAsText('paffiliation'); ?>
			</td>
		</tr>
		<tr>
			<td class="student_rechts" valign="top">
				%%%supervisor%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php $this->printAsText('psupervisor'); ?>
			</td>
		</tr>
		<tr>
			<td class="student_rechts" valign="top">
				%%%thesisCommittee%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php $this->printAsText('pcommitee'); ?>
			</td>
		</tr>
		<tr>
			<td class="student_rechts" valign="top">
				%%%thesisSubject%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php $this->printAsText('psubject'); ?> 
			</td>
		</tr>
		<tr>
			<td colspan="3" class="student_links" valign="top">
				<?php $this->printAsRte('pthesis'); ?>
			</td>
		</tr>
	</table>
<?php endif; ?>


