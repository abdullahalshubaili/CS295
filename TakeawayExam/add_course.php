<?php
	include "header.php";
?>




				<h1>Add Course</h1>
			
			<div>
				<form id="add_course_form" name="add_course_form" method="POST" action="index.php">
					</div>
						<label>Course Name</label>
						<div>
							<input id="flag" name="flag" type="hidden" value="" />
							<input id="course_name" name="course_name" type="text">
						</div>
			
						<label>Start Time</label>
						<div>
							<input id="start_time" name="start_time" type="text">
						</div>
			
						<label>Duration</label>
						<div>
							<input id="duration" name="duration" type="text">
						</div>
				
					<div>
						<label>Day of Week</label>
						<div>
							<select id="week" name="week" >
								<option value="Monday">Monday</option>
								<option value="Tuesday">Tuesday</option>
								<option value="Wednesday">Wednesday</option>
								<option value="Thursday">Thursday</option>
								<option value="Friday">Friday</option>
							</select>
						</div>

					<SCRIPT>
	function MyFunctions(){
		var add_course_form=document.add_course_form;
		add_course_form.flag.value="add_course";
		
		add_course_form.submit();
	}
</SCRIPT>
					<div>
<button type="submit" class="btn" onclick="javascript:MyFunctions();">Add</button>
<button type="button" onclick="window.location.href='index.php'" class="btn">Cancel</button>
					</div>
				</form>

