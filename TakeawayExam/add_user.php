<?php
	include "header.php";
?>

	<h1>Sign up </h1>
	<div>
	<form id="add" name="add" method="POST" action="signup.php">
	</div>
	<label>User Name</label>
	<div>
	<input id="flag" name="flag" type="hidden" value="" />
	<input id="user_name" name="user_name" type="text" />
	</div>
	<label>Start Time</label>
	<div>
	<input id="start_time" name="start_time" type="text" />
	</div>
	<label>Duration</label>
	<div>
	<input id="duration" name="duration" type="text" />
	</div>

	<label>Day of Week</label>
	
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
		var add=document.add;
		add.flag.value="register";
		
		add.submit();
	}
</SCRIPT>
					<div>
	<button type="submit" class="btn" onclick="javascript:MyFunctions();">Add user</button>
	<button type="button" onclick="window.location.href='index.php'" class="btn">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
