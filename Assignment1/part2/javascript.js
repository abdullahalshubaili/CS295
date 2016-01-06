function calc()
{
    var form = document.getElementById("form");
    var lettergrade = document.getElementById("lettergrade");
    var field = form.elements['agrade'];     
    var input = field.value, grade, max = 100, min = 0;
    
    if (isNaN(input)) 
  {
    alert("Must input numbers");
    
  } else if(input){
      field.value = grade = input > max ? grade = max
	  : input < min ? grade = min : input;
			lettergrade.value =
				(grade < 59.99) ? "F" :
(grade < 63) ? "D" :
      (grade < 67) ? "D+" :
	  (grade < 70) ? "C-" :
	  (grade < 73) ? "C" :
	  (grade < 77) ? "C+" :
	  	(grade < 80) ? "B-" :
	  	(grade < 83.00) ? "B" :
	  (grade < 87.99) ? "B+" :
	  	(grade < 92.99) ? "A-" :
				(grade <100) ? "A" : "A";

		} 

 



    
}
