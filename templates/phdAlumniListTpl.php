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
/*
 * Name, 
 * Citizenship: 
 * PhD Affiliation:  paffiliation 
 * PhD Supervisor: psupervisor 
 * PhD committee: pcommitee 
 * Dissertation: pdissertation
 * PhD Publications: ppublications
 */
 ?>

 
 <?php if($this->isNotEmpty()): ?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="studentList">
	<?php for($this->rewind(); $this->valid(); $this->next()): $student = $this->current();	?>
		<tr>
			<td rowspan="7" class="student_links" valign="top">
				<?php $student->printStudentImg(); ?>
			</td>
			<td class="student_rechts" valign="top">
				%%%name%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php //t3lib_div::debug($entry,'exampleAction'); ?>
				<strong><?php $student->printLinkedName(); ?></strong>
			</td>
		</tr><tr>
			<td class="student_rechts" valign="top">
				%%%citizenship%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php $student->printAsText('nationality'); ?>
			</td>
		</tr><tr>
			<td class="student_rechts" valign="top">
				%%%affiliation%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php $student->printAsText('paffiliation'); ?>
			</td>
		</tr><tr>
			<td class="student_rechts" valign="top">
				%%%supervisor%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php $student->printAsText('psupervisor'); ?>
			</td>
		</tr><tr>
			<td class="student_rechts" valign="top">
				%%%thesisCommittee%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php $student->printAsText('pcommitee'); ?> 
			</td>
		</tr><tr>
			<td class="student_rechts" valign="top">
				%%%dissertation%%%:
			</td>
			<td class="student_rechts" valign="top">
				<?php $student->printAsText('pdissertation'); ?> 
			</td>
		</tr><tr>

			<?php if($student->has('ppublications')): ?>
				<td class="student_rechts" valign="top">
					%%%publications%%%:
				</td>
				<td class="student_rechts" valign="top">
					<?php $student->printAsRte('ppublications'); ?> 
				</td>
			<?php endif; ?>
		</tr>


	<?php endfor; ?>
	</table>
<?php endif; ?>


