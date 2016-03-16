<?php
	include "library.php";
	include "header.php";
	
	switch (@$_POST["flag"]){
		case 'register': 
			$user_name=@$_POST["user_name"];
			$start_time=@$_POST["start_time"];
			$duration=@$_POST["duration"];
			$end_time=$start_time + $duration;
			$week=@$_POST["week"];
			
			$ErrorUser = array();
			switch ($week){
				case 'Monday':
					for($i = $start_time; $i < $end_time; $i++){
						$countsign = countsignup($user_name);
						if($countsign < 2 && @$_SESSION['Monday'][$i]['course_name'] =='' && @$_SESSION['Monday'][$i]['user_name'] =='' ){
							@$_SESSION['Monday'][$i]['user_name'] = $user_name;
						}else{
							array_push($ErrorUser, $i);
						}
					}
					if(count($ErrorUser) > 0){
						$Error = "";
						foreach($ErrorUser as $tmp){
							$Error.=$tmp.", ";
						}
						$Error = substr($Error, 0, -2);
			print "<SCRIPT>alert('you cannot register in $Error!');</SCRIPT>";
					}
					break;
				case 'Tuesday':
					for($i = $start_time; $i < $end_time; $i++){
						$countsign = countsignup($user_name);
						if($countsign < 2 && @$_SESSION['Tuesday'][$i]['course_name'] =='' && @$_SESSION['Tuesday'][$i]['user_name'] ==''){
							@$_SESSION['Tuesday'][$i]['user_name'] = $user_name;
						}else{
							array_push($ErrorUser, $i);
						}
					}
					if(count($ErrorUser) > 0){
						$Error = "";
						foreach($ErrorUser as $tmp){
							$Error.=$tmp.", ";
						}
						$Error = substr($Error, 0, -2);
					print "<SCRIPT>alert('you cannot register in $Error!');</SCRIPT>";
					}
					break;
				case 'Wednesday':
					for($i = $start_time; $i < $end_time; $i++){
						$countsign = countsignup($user_name);
						if($countsign < 2 && @$_SESSION['Wednesday'][$i]['course_name'] =='' && @$_SESSION['Wednesday'][$i]['user_name'] =='' ){
							@$_SESSION['Wednesday'][$i]['user_name'] = $user_name;
						}else{
							array_push($ErrorUser, $i);
						}
					}
					if(count($ErrorUser) > 0){
						$Error = "";
						foreach($ErrorUser as $tmp){
							$Error.=$tmp.", ";
						}
						$Error = substr($Error, 0, -2);
						print "<SCRIPT>alert('you cannot register in $Error!');</SCRIPT>";
					}
					
					break;
				case 'Thursday':
					for($i = $start_time; $i < $end_time; $i++){
						$countsign = countsignup($user_name);
						if($countsign < 2 && @$_SESSION['Thursday'][$i]['course_name'] =='' && @$_SESSION['Thursday'][$i]['user_name'] =='' ){
							@$_SESSION['Thursday'][$i]['user_name'] = $user_name;
						}else{
							array_push($ErrorUser, $i);
						}
					}
					if(count($ErrorUser) > 0){
						$Error = "";
						foreach($ErrorUser as $tmp){
							$Error.=$tmp.", ";
						}
						$Error = substr($Error, 0, -2);
						print "<SCRIPT>alert('you cannot register in $Error!');</SCRIPT>";
					}
					break;
				case 'Friday':
					for($i = $start_time; $i < $end_time; $i++){
						$countsign = countsignup($user_name);
						if($countsign < 2 && @$_SESSION['Friday'][$i]['course_name'] =='' && @$_SESSION['Friday'][$i]['user_name'] =='' ){
							@$_SESSION['Friday'][$i]['user_name'] = $user_name;
						}else{
							array_push($ErrorUser, $i);
						}
					}
					if(count($ErrorUser) > 0){
						$Error = "";
						foreach($ErrorUser as $tmp){
							$Error.=$tmp.", ";
						}
						$Error = substr($Error, 0, -2);
			print "<SCRIPT>alert('you cannot register in $Error!');</SCRIPT>";
					}
		break;
			}
			$flag = "";
			break;		
	}
	
?>
		<h1>Weekly Schedule</h1>

	<h2>Weekly Schedule for the CS Lab Winter 2014</h2>
	<table>
		<thead>
		<tr>
		<th>Time</th>
		<th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>7</td>
		<td <?php if(@$_SESSION['Monday'][7] && @$_SESSION['Monday'][7]['course_name'] != "") 
		print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][7]['course_name'] != ""){
		print @$_SESSION['Monday'][7]['course_name'];}else{
		print @$_SESSION['Monday'][7]['user_name'];}?></td>
		<td <?php if(@$_SESSION['Tuesday'][7] && @$_SESSION['Tuesday'][7]['course_name'] != "") 
		print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][7]['course_name'] != ""){
		print @$_SESSION['Tuesday'][7]['course_name'];}else{
		print @$_SESSION['Tuesday'][7]['user_name'];}?></td>
		<td <?php if(@$_SESSION['Wednesday'][7] && @$_SESSION['Wednesday'][7]['course_name'] != "") 
		print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][7]['course_name'] != ""){
		print @$_SESSION['Wednesday'][7]['course_name'];}else{
		print @$_SESSION['Wednesday'][7]['user_name'];}?></td>
		<td <?php if(@$_SESSION['Thursday'][7] && @$_SESSION['Thursday'][7]['course_name'] != "") 
		print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][7]['course_name'] != ""){
		print @$_SESSION['Thursday'][7]['course_name'];}else{
		print @$_SESSION['Thursday'][7]['user_name'];}?></td>
		<td <?php if(@$_SESSION['Friday'][7] && @$_SESSION['Friday'][7]['course_name'] != "") 
		print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][7]['course_name'] != ""){
		print @$_SESSION['Friday'][7]['course_name'];}else{
		print @$_SESSION['Friday'][7]['user_name'];}?></td>
		</tr>
				<tr>
						<td>8</td>
						<td <?php if(@$_SESSION['Monday'][8] && @$_SESSION['Monday'][8]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][8]['course_name'] != ""){
						print @$_SESSION['Monday'][8]['course_name'];}else{
						print @$_SESSION['Monday'][8]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][8] && @$_SESSION['Tuesday'][8]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][8]['course_name'] != ""){
						print @$_SESSION['Tuesday'][8]['course_name'];}else{
						print @$_SESSION['Tuesday'][8]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][8] && @$_SESSION['Wednesday'][8]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][8]['course_name'] != ""){
						print @$_SESSION['Wednesday'][8]['course_name'];}else{
						print @$_SESSION['Wednesday'][8]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][8] && @$_SESSION['Thursday'][8]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][8]['course_name'] != ""){
						print @$_SESSION['Thursday'][8]['course_name'];}else{
						print @$_SESSION['Thursday'][8]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][8] && @$_SESSION['Friday'][8]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][8]['course_name'] != ""){
						print @$_SESSION['Friday'][8]['course_name'];}else{
						print @$_SESSION['Friday'][8]['user_name'];}?></td>
					</tr>
					<tr>
						<td>9</td>
						<td <?php if(@$_SESSION['Monday'][9] && @$_SESSION['Monday'][9]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][9]['course_name'] != ""){
						print @$_SESSION['Monday'][9]['course_name'];}else{
						print @$_SESSION['Monday'][9]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][9] && @$_SESSION['Tuesday'][9]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][9]['course_name'] != ""){
						print @$_SESSION['Tuesday'][9]['course_name'];}else{
						print @$_SESSION['Tuesday'][9]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][9] && @$_SESSION['Wednesday'][9]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][9]['course_name'] != ""){
						print @$_SESSION['Wednesday'][9]['course_name'];}else{
						print @$_SESSION['Wednesday'][9]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][9] && @$_SESSION['Thursday'][9]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][9]['course_name'] != ""){
						print @$_SESSION['Thursday'][9]['course_name'];}else{
						print @$_SESSION['Thursday'][9]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][9] && @$_SESSION['Friday'][9]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][9]['course_name'] != ""){
						print @$_SESSION['Friday'][9]['course_name'];}else{
						print @$_SESSION['Friday'][9]['user_name'];}?></td>
					</tr>
					<tr>
						<td>10</td>
						<td <?php if(@$_SESSION['Monday'][10] && @$_SESSION['Monday'][10]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][10]['course_name'] != ""){
						print @$_SESSION['Monday'][10]['course_name'];}else{
						print @$_SESSION['Monday'][10]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][10] && @$_SESSION['Tuesday'][10]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][10]['course_name'] != ""){
						print @$_SESSION['Tuesday'][10]['course_name'];}else{
						print @$_SESSION['Tuesday'][10]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][10] && @$_SESSION['Wednesday'][10]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][10]['course_name'] != ""){
						print @$_SESSION['Wednesday'][10]['course_name'];}else{
						print @$_SESSION['Wednesday'][10]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][10] && @$_SESSION['Thursday'][10]['course_name'] != "")
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][10]['course_name'] != ""){
						print @$_SESSION['Thursday'][10]['course_name'];}else{
						print @$_SESSION['Thursday'][10]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][10] && @$_SESSION['Friday'][10]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][10]['course_name'] != ""){
						print @$_SESSION['Friday'][10]['course_name'];}else{
						print @$_SESSION['Friday'][10]['user_name'];}?></td>
					</tr>
					<tr>
						<td>11</td>
						<td <?php if(@$_SESSION['Monday'][11] && @$_SESSION['Monday'][11]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][11]['course_name'] != ""){
						print @$_SESSION['Monday'][11]['course_name'];}else{
						print @$_SESSION['Monday'][11]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][11] && @$_SESSION['Tuesday'][11]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][11]['course_name'] != ""){
						print @$_SESSION['Tuesday'][11]['course_name'];}else{
						print @$_SESSION['Tuesday'][11]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][11] && @$_SESSION['Wednesday'][11]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][11]['course_name'] != ""){
						print @$_SESSION['Wednesday'][11]['course_name'];}else{
						print @$_SESSION['Wednesday'][11]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][11] && @$_SESSION['Thursday'][11]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][11]['course_name'] != ""){
						print @$_SESSION['Thursday'][11]['course_name'];}else{
						print @$_SESSION['Thursday'][11]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][11] && @$_SESSION['Friday'][11]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][11]['course_name'] != ""){
						print @$_SESSION['Friday'][11]['course_name'];}else{
						print @$_SESSION['Friday'][11]['user_name'];}?></td>
					</tr>
					<tr>
						<td>12</td>
						<td <?php if(@$_SESSION['Monday'][12] && @$_SESSION['Monday'][12]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][12]['course_name'] != ""){
						print @$_SESSION['Monday'][12]['course_name'];}else{
						print @$_SESSION['Monday'][12]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][12] && @$_SESSION['Tuesday'][12]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][12]['course_name'] != ""){
						print @$_SESSION['Tuesday'][12]['course_name'];}else{
						print @$_SESSION['Tuesday'][12]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][12] && @$_SESSION['Wednesday'][12]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][12]['course_name'] != ""){
						print @$_SESSION['Wednesday'][12]['course_name'];}else{
						print @$_SESSION['Wednesday'][12]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][12] && @$_SESSION['Thursday'][12]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][12]['course_name'] != ""){
						print @$_SESSION['Thursday'][12]['course_name'];}else{
						print @$_SESSION['Thursday'][12]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][12] && @$_SESSION['Friday'][12]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][12]['course_name'] != ""){
						print @$_SESSION['Friday'][12]['course_name'];}else{
						print @$_SESSION['Friday'][12]['user_name'];}?></td>
					</tr>
					<tr>
						<td>13</td>
						<td <?php if(@$_SESSION['Monday'][13] && @$_SESSION['Monday'][13]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][13]['course_name'] != ""){
						print @$_SESSION['Monday'][13]['course_name'];}else{
						print @$_SESSION['Monday'][13]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][13] && @$_SESSION['Tuesday'][13]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][13]['course_name'] != ""){
						print @$_SESSION['Tuesday'][13]['course_name'];}else{
						print @$_SESSION['Tuesday'][13]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][13] && @$_SESSION['Wednesday'][13]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][13]['course_name'] != ""){
						print @$_SESSION['Wednesday'][13]['course_name'];}else{
						print @$_SESSION['Wednesday'][13]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][13] && @$_SESSION['Thursday'][13]['course_name'] != "")
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][13]['course_name'] != ""){
						print @$_SESSION['Thursday'][13]['course_name'];}else{
						print @$_SESSION['Thursday'][13]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][13] && @$_SESSION['Friday'][13]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][13]['course_name'] != ""){
						print @$_SESSION['Friday'][13]['course_name'];}else{
						print @$_SESSION['Friday'][13]['user_name'];}?></td>
					</tr>
					<tr>
						<td>14</td>
						<td <?php if(@$_SESSION['Monday'][14] && @$_SESSION['Monday'][14]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][14]['course_name'] != ""){
						print @$_SESSION['Monday'][14]['course_name'];}else{
						print @$_SESSION['Monday'][14]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][14] && @$_SESSION['Tuesday'][14]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][14]['course_name'] != ""){
						print @$_SESSION['Tuesday'][14]['course_name'];}else{
						print @$_SESSION['Tuesday'][14]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][14] && @$_SESSION['Wednesday'][14]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][14]['course_name'] != ""){
						print @$_SESSION['Wednesday'][14]['course_name'];}else{
						print @$_SESSION['Wednesday'][14]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][14] && @$_SESSION['Thursday'][14]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][14]['course_name'] != ""){
						print @$_SESSION['Thursday'][14]['course_name'];}else{
						print @$_SESSION['Thursday'][14]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][14] && @$_SESSION['Friday'][14]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][14]['course_name'] != ""){
						print @$_SESSION['Friday'][14]['course_name'];}else{
						print @$_SESSION['Friday'][14]['user_name'];}?></td>
					</tr>
					<tr>
						<td>15</td>
						<td <?php if(@$_SESSION['Monday'][15] && @$_SESSION['Monday'][15]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][15]['course_name'] != ""){
						print @$_SESSION['Monday'][15]['course_name'];}else{
						print @$_SESSION['Monday'][15]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][15] && @$_SESSION['Tuesday'][15]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][15]['course_name'] != ""){
						print @$_SESSION['Tuesday'][15]['course_name'];}else{
						print @$_SESSION['Tuesday'][15]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][15] && @$_SESSION['Wednesday'][15]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][15]['course_name'] != ""){
						print @$_SESSION['Wednesday'][15]['course_name'];}else{
						print @$_SESSION['Wednesday'][15]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][15] && @$_SESSION['Thursday'][15]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][15]['course_name'] != ""){
						print @$_SESSION['Thursday'][15]['course_name'];}else{
						print @$_SESSION['Thursday'][15]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][15] && @$_SESSION['Friday'][15]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][15]['course_name'] != ""){
						print @$_SESSION['Friday'][15]['course_name'];}else{
						print @$_SESSION['Friday'][15]['user_name'];}?></td>
					</tr>
					<tr>
						<td>16</td>
						<td <?php if(@$_SESSION['Monday'][16] && @$_SESSION['Monday'][16]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][16]['course_name'] != ""){
						print @$_SESSION['Monday'][16]['course_name'];}else{
						print @$_SESSION['Monday'][16]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][16] && @$_SESSION['Tuesday'][16]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][16]['course_name'] != ""){
						print @$_SESSION['Tuesday'][16]['course_name'];}else{
						print @$_SESSION['Tuesday'][16]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][16] && @$_SESSION['Wednesday'][16]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][16]['course_name'] != ""){
						print @$_SESSION['Wednesday'][16]['course_name'];}else{
						print @$_SESSION['Wednesday'][16]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][16] && @$_SESSION['Thursday'][16]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][16]['course_name'] != ""){
						print @$_SESSION['Thursday'][16]['course_name'];}else{
						print @$_SESSION['Thursday'][16]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][16] && @$_SESSION['Friday'][16]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][16]['course_name'] != ""){
						print @$_SESSION['Friday'][16]['course_name'];}else{
						print @$_SESSION['Friday'][16]['user_name'];}?></td>
					</tr>
					<tr>
						<td>17</td>
						<td <?php if(@$_SESSION['Monday'][17] && @$_SESSION['Monday'][17]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][17]['course_name'] != ""){
						print @$_SESSION['Monday'][17]['course_name'];}else{
						print @$_SESSION['Monday'][17]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][17] && @$_SESSION['Tuesday'][17]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][17]['course_name'] != ""){
						print @$_SESSION['Tuesday'][17]['course_name'];}else{
						print @$_SESSION['Tuesday'][17]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][17] && @$_SESSION['Wednesday'][17]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][17]['course_name'] != ""){
						print @$_SESSION['Wednesday'][17]['course_name'];}else{
						print @$_SESSION['Wednesday'][17]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][17] && @$_SESSION['Thursday'][17]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][17]['course_name'] != ""){
						print @$_SESSION['Thursday'][17]['course_name'];}else{
						print @$_SESSION['Thursday'][17]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][17] && @$_SESSION['Friday'][17]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][17]['course_name'] != ""){
						print @$_SESSION['Friday'][17]['course_name'];}else{
						print @$_SESSION['Friday'][17]['user_name'];}?></td>
					</tr>
					<tr>
						<td>18</td>
						<td <?php if(@$_SESSION['Monday'][18] && @$_SESSION['Monday'][18]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][18]['course_name'] != ""){
						print @$_SESSION['Monday'][18]['course_name'];}else{
						print @$_SESSION['Monday'][18]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][18] && @$_SESSION['Tuesday'][18]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][18]['course_name'] != ""){
						print @$_SESSION['Tuesday'][18]['course_name'];}else{
						print @$_SESSION['Tuesday'][18]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][18] && @$_SESSION['Wednesday'][18]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][18]['course_name'] != ""){
						print @$_SESSION['Wednesday'][18]['course_name'];}else{
						print @$_SESSION['Wednesday'][18]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][18] && @$_SESSION['Thursday'][18]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][18]['course_name'] != ""){
						print @$_SESSION['Thursday'][18]['course_name'];}else{
						print @$_SESSION['Thursday'][18]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][18] && @$_SESSION['Friday'][18]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][18]['course_name'] != ""){
						print @$_SESSION['Friday'][18]['course_name'];}else{
						print @$_SESSION['Friday'][18]['user_name'];}?></td>
					</tr>
					<tr>
						<td>19</td>
						<td <?php if(@$_SESSION['Monday'][19] && @$_SESSION['Monday'][19]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][19]['course_name'] != ""){
						print @$_SESSION['Monday'][19]['course_name'];}else{
						print @$_SESSION['Monday'][19]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][19] && @$_SESSION['Tuesday'][19]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][19]['course_name'] != ""){
						print @$_SESSION['Tuesday'][19]['course_name'];}else{
						print @$_SESSION['Tuesday'][19]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][19] && @$_SESSION['Wednesday'][19]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][19]['course_name'] != ""){
						print @$_SESSION['Wednesday'][19]['course_name'];}else{
						print @$_SESSION['Wednesday'][19]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][19] && @$_SESSION['Thursday'][19]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][19]['course_name'] != ""){
						print @$_SESSION['Thursday'][19]['course_name'];}else{
						print @$_SESSION['Thursday'][19]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][19] && @$_SESSION['Friday'][19]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][19]['course_name'] != ""){
						print @$_SESSION['Friday'][19]['course_name'];}else{
						print @$_SESSION['Friday'][19]['user_name'];}?></td>
					</tr>
					<tr>
						<td>20</td>
						<td <?php if(@$_SESSION['Monday'][20] && @$_SESSION['Monday'][20]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Monday'][20]['course_name'] != ""){
						print @$_SESSION['Monday'][20]['course_name'];
						}else{
						print @$_SESSION['Monday'][20]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Tuesday'][20] && @$_SESSION['Tuesday'][20]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Tuesday'][20]['course_name'] != ""){
						print @$_SESSION['Tuesday'][20]['course_name'];
						}else{
						print @$_SESSION['Tuesday'][20]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Wednesday'][20] && @$_SESSION['Wednesday'][20]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Wednesday'][20]['course_name'] != ""){
						print @$_SESSION['Wednesday'][20]['course_name'];}else{
						print @$_SESSION['Wednesday'][20]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Thursday'][20] && @$_SESSION['Thursday'][20]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Thursday'][20]['course_name'] != ""){
						print @$_SESSION['Thursday'][20]['course_name'];}else{
						print @$_SESSION['Thursday'][20]['user_name'];}?></td>
						<td <?php if(@$_SESSION['Friday'][20] && @$_SESSION['Friday'][20]['course_name'] != "") 
						print "style='background-color:#2B65EC;'";?>><?php if(@$_SESSION['Friday'][20]['course_name'] != ""){
						print @$_SESSION['Friday'][20]['course_name'];}else{
						print @$_SESSION['Friday'][20]['user_name'];}?></td>
					</tr>
				</tbody>
			</table>
			<SCRIPT>
	function add_user_href() {
		document.location.href="add_user.php"
	}

</SCRIPT>

			<div class="btn-action">
				<button type="button" class="btn" onclick="javascript:add_user_href();">Sign Up</button>
				<button type="button" class="btn" onclick="window.location.href='index.php'" >Cancel</button>
			</div>
