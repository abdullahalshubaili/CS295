<?php
	include "library.php";
	include "header.php";
?>

				<h1>Remove Course Form</h1>
	
			<div>
				<form id="remove_course_form" name="remove_course_form" method="POST" action="index.php">
					</div>
						<label>Remove Course</label>
						<div>
							<input id="flag" name="flag" type="hidden" value="" />
							<select id="course_id" name="course_id" >
								<?php 	
									foreach(@$_SESSION['Monday'] as $in => $class){
								?>
								<option value="<?php print 'Monday'." ".$in." ".$class['course_name'] ?>">
								<?php print'Monday'." ".$in." ".$class['course_name']?></option>
								<?php } ?>
								<?php 	
									foreach(@$_SESSION['Tuesday'] as $in => $class){
								?>
								<option value="<?php print'Tuesday'." ".$in." ".$class['course_name']?>">
								<?php print'Tuesday'." ".$in." ".$class['course_name']?></option>
								<?php } ?>
								<?php 	
									foreach(@$_SESSION['Wednesday'] as $in => $class){
								?>
								<option value="<?php print'Wednesday'." ".$in." ".$class['course_name']?>">
								<?php print'Wednesday'." ".$in." ".$class['course_name']?></option>
								<?php } ?>
								<?php 	
									foreach(@$_SESSION['Thursday'] as $in => $class){
								?>
								<option value="<?php print'Thursday'." ".$in." ".$class['course_name']?>">
								<?php print'Thursday'." ".$in." ".$class['course_name']?></option>
								<?php } ?>
								<?php 	
									foreach(@$_SESSION['Friday'] as $in => $class){
								?>
								<option value="<?php print'Friday'." ".$in." ".$class['course_name']?>">
								<?php print'Friday'." ".$in." ".$class['course_name']?></option>
								<?php } ?>
						
							</select>
					
					<SCRIPT>
	function MyFunction(){
		var remove_course_form=document.remove_course_form;
		remove_course_form.flag.value="remove_course";
		
		remove_course_form.submit();
	}
</SCRIPT>
					<div>
<button type="submit" class="btn" onclick="MyFunction();">Remove course</button>
<button type="button" onclick="window.location.href='index.php'" class="btn">Cancel</button>
						
					</div>
				</form>
