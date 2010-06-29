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
	<?php for($this->rewind(); $this->valid(); $this->next()): $student = $this->current();	?>
		<tr>
			<td class="student_links" valign="top">
				<?php $student->printStudentImg(); ?>
			</td>
			<td class="student_rechts">
			<?php //t3lib_div::debug($entry,'exampleAction'); ?>
				<strong><?php $student->printAsText('lastname'); ?>, <?php $student->printAsText('firstname'); ?></strong><br />
				<?php $student->printAsText('nationality'); ?><br />
				<?php $student->printAsText('prevdegree'); ?> <?php $student->printAsText('prevmajor'); ?><br />
				<?php $student->printAsText('prevuni'); ?>
			</td>
		</tr>

	<?php endfor; ?>
	</table>
<?php endif; ?>


