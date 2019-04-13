// loop function for showing date
function userDate() {

	var selectday = document.getElementById("day"),
		createoptionday = document.createDocumentFragment();
		
		for (var i = 1; i<=31 ; i++) {
			var optionday = document.createElement("option");
				optionday.value = i;
				optionday.appendChild(document.createTextNode(i));
        		createoptionday.appendChild(optionday);
		}

		selectday.appendChild(createoptionday);

};
// call date function 
userDate();
	

// loop function for showing year	
function userYear() {

		var selectyear = document.getElementById("year"),
			createoptionyear = document.createDocumentFragment();
			
			for (var i = 2001; i>=1970 ; i--) {
				var optionyear = document.createElement("option");
					optionyear.value = i;
					optionyear.appendChild(document.createTextNode(i));
	        		createoptionyear.appendChild(optionyear);
			}

			selectyear.appendChild(createoptionyear);

};
// call year function 
userYear();


// loop function for showing month
function userMonth() {
    var month = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
    var monthlen = month.length;

    var selectmonth = document.getElementById("month"),
      createoptionmonth = document.createDocumentFragment();

    for (var i = 0; i < monthlen; i++) {
        
      var optionmonth = document.createElement("option");
      optionmonth.value = month[i];
      optionmonth.appendChild(document.createTextNode(month[i]));
      createoptionmonth.appendChild(optionmonth);
    }

    selectmonth.appendChild(createoptionmonth);
}
// call month function
userMonth();



//loop function for Professional State
function professionalState() {
    var state = ["Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Delhi",
                  "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jhakhand", "Karnataka",
                  "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha",
                  "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand",
                  "West Bengal"];
    var Statelen = state.length;

    var selectstate = document.getElementById("stateLiving"),
        createoptionstate =document.createDocumentFragment();

        for (var i = 0; i <Statelen; i++) {
            var optionstate = document.createElement("option");
            optionstate.value = state[i];
            optionstate.appendChild(document.createTextNode(state[i]));
            createoptionstate.appendChild(optionstate);
        }

        selectstate.appendChild(createoptionstate);
}
// call function
professionalState();



//loop function for Family State
function familyState() {
    var state = ["Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Delhi",
                  "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jhakhand", "Karnataka",
                  "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha",
                  "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand",
                  "West Bengal"];
    var Statelen = state.length;

    var selectstate = document.getElementById("familyState"),
        createoptionstate =document.createDocumentFragment();

        for (var i = 0; i <Statelen; i++) {
            var optionstate = document.createElement("option");
            optionstate.value = state[i];
            optionstate.appendChild(document.createTextNode(state[i]));
            createoptionstate.appendChild(optionstate);
        }

        selectstate.appendChild(createoptionstate);
}
// call function
familyState();


// form validation function
function formValidation() {
		 var b = document.getElementById("FirstName").value;
		 var c = document.getElementById("LastName").value;
		 var h = document.getElementById("community").value;
		 var i = document.getElementById("gotra").value;
		 var k = document.getElementById("feet").value;
		 var l = document.getElementById("inches").value;
		 var o = document.getElementById("proCity").value;
		 var p = document.getElementById("district").value;
		 var r = document.getElementById("degreDetails").value;
		 var s = document.getElementById("professional").value;
		 var t = document.getElementById("companyName").value;
		 var u = document.getElementById("jobTitle").value;
		 var w = document.getElementById("fatherName").value;
		 var x = document.getElementById("fatherJob").value;
		 var y = document.getElementById("mothername").value;
		 var z = document.getElementById("motherJob").value;
		 var za = document.getElementById("brotherName").value;
		 var zb = document.getElementById("sisterName").value;
		 var zc = document.getElementById("mainCity").value;
		 var zd = document.getElementById("pinCode").value;
		 var zf = document.getElementById("mainPhone").value;
		 var zg = document.getElementById("phoneNumber").value
		

		// Creating Variables for check for only alphabets:- 
		var regexp1=new RegExp("[^a-z|^A-Z]");

		// checking first name box is not empty and value is only alphabets and length is greater then 4 
		if (b == "") {
   			alert("FirstName must be filled out");
    		return false;
  		}else if (regexp1.test(b)) {
  			alert("Only alphabets from a-z and A-Z are allowed for FirstName");
    		return false;
  		}else if (b.length<3) {
  			alert("Please fill correct FirstName");
    		return false;
  		}



  		// checking last name box is not empty and value is only alphabets and length is greater then 		4 
		if (c == "") {
   			alert("LastName must be filled out");
    		return false;
  		}else if (regexp1.test(c)) {
  			alert("Only alphabets from a-z and A-Z are allowed for LastName");
    		return false;
  		}else if (c.length<3) {
  			alert("Please fill correct LastName");
    		return false;
  		}


  		// checking community box is not empty and value is only alphabets and length is greater then 		4 
  		if (h == "") {
   			alert("community must be filled out");
    		return false;
  		}else if (regexp1.test(h)) {
  			alert("Only alphabets from a-z and A-Z are allowed for community");
    		return false;
  		}else if (h.length<3) {
  			alert("Please fill correct community");
    		return false;
  		}



  		// checking gotra box is not empty and value is only alphabets and length is greater then 		4 
  		if (i == "") {
   			alert("gotra must be filled out");
    		return false;
  		}else if (regexp1.test(i)) {
  			alert("Only alphabets from a-z and A-Z are allowed for gotra");
    		return false;
  		}else if (i.length<3) {
  			alert("Please fill correct gotra");
    		return false;
  		}

  		// checking feet box is not empty and value is only number and length is only one
  		if (k == "") {
   			alert("feet must be filled out");
    		return false;
  		}else if (k.length>1) {
  			alert("feet value is only one number and number only 1 to 9");
   			return false;
  		}

  		// checking inches box is not empty and value is only number and length is only one
  		if (l == "") {
   			alert("inches must be filled out");
    		return false;
  		}else if (l.length>2) {
  			alert("inches value is only one or two number and number only 0 to 9");
   			return false;
  		}



  		// checking ProfessionalCity box is not empty and value is only alphabets and length is greater then 3
  		if (o == "") {
   			alert("Professional City must be filled out");
    		return false;
  		}else if (regexp1.test(o)) {
  			alert("Only alphabets from a-z and A-Z are allowed for Professional city");
    		return false;
  		}else if (o.length<3) {
  			alert("Please fill correct Professional City");
    		return false;
  		}


  		// checking district box is not empty and value is only alphabets and length is greater then 		3
  		if (p == "") {
   			alert("district must be filled out");
    		return false;
  		}else if (regexp1.test(p)) {
  			alert("Only alphabets from a-z and A-Z are allowed for district");
    		return false;
  		}else if (p.length<3) {
  			alert("Please fill correct district");
    		return false;
  		}


  		// checking degreDetails box is not empty and value is only alphabets and length is greater then 3
  		if (r == "") {
   			alert("Degree Details must be filled out");
    		return false;
  		}else if (regexp1.test(r)) {
  			alert("Only alphabets from a-z and A-Z are allowed for Degree Details");
    		return false;
  		}else if (r.length<3) {
  			alert("Please fill correct Degree Details");
    		return false;
  		}


  		// checking companyName box is not empty and value is only alphabets and length is greater then 		3
  		if (t == "") {
   			alert("Company Name must be filled out");
    		return false;
  		}else if (regexp1.test(t)) {
  			alert("Only alphabets from a-z and A-Z are allowed for Company Name");
    		return false;
  		}else if (t.length<3) {
  			alert("Please fill correct Company Name");
    		return false;
  		}


  		// checking WorkingAs box is not empty and value is only alphabets and length is greater then 		3
  		if (u == "") {
   			alert("WorkingAs must be filled out");
    		return false;
  		}else if (regexp1.test(u)) {
  			alert("Only alphabets from a-z and A-Z are allowed for WorkingAs");
    		return false;
  		}else if (u.length<3) {
  			alert("Please fill correct WorkingAs");
    		return false;
  		}


  		// checking fatherName box is not empty and value is only alphabets and length is greater then 		3
  		if (w == "") {
   			alert("fatherName must be filled out");
    		return false;
  		}else if (regexp1.test(w)) {
  			alert("Only alphabets from a-z and A-Z are allowed for fatherName");
    		return false;
  		}else if (w.length<3) {
  			alert("Please fill correct fatherName");
    		return false;
  		}


  		// checking fatherJob box is not empty and value is only alphabets and length is greater then 	3
  		if (x == "") {
   			alert("fatherJob must be filled out");
    		return false;
  		}else if (regexp1.test(x)) {
  			alert("Only alphabets from a-z and A-Z are allowed for fatherJob");
    		return false;
  		}else if (x.length<3) {
  			alert("Please fill correct fatherJob");
    		return false;
  		}

  		// checking mothername box is not empty and value is only alphabets and length is greater then 	3
  		if (y == "") {
   			alert("mothername must be filled out");
    		return false;
  		}else if (regexp1.test(y)) {
  			alert("Only alphabets from a-z and A-Z are allowed for mothername");
    		return false;
  		}else if (y.length<3) {
  			alert("Please fill correct mothername");
    		return false;
  		}


  		// checking motherjob box is not empty and value is only alphabets and length is greater then 	3
  		if (z == "") {
   			alert("motherjob must be filled out");
    		return false;
  		}else if (regexp1.test(z)) {
  			alert("Only alphabets from a-z and A-Z are allowed for mothername");
    		return false;
  		}else if (z.length<3) {
  			alert("Please fill correct motherjob");
    		return false;
  		}


  		// checking Brothers box is not empty
  		if (za == "") {
   			alert("Brothersnumber must be filled out");
    		return false;
  		}

  		// checking Brothers box is not empty
  		if (zb == "") {
   			alert("Sistersnumber must be filled out");
    		return false;
  		}


  		// checking Familycity box is not empty and value is only alphabets and length is greater then 3 
  		if (zc == "") {
   			alert("Family city must be filled out");
    		return false;
  		}else if (regexp1.test(zc)) {
  			alert("Only alphabets from a-z and A-Z are allowed for Family city");
    		return false;
  		}else if (zc.length<3) {
  			alert("Please fill correct Family city");
    		return false;
  		}

  		// checking pincode box is not empty and length is only 6
  		if (zd == "") {
   			alert("pincode must be filled out");
    		return false;
  		}else if(zd.length!=6){
			alert("Pincode must be 6 digits");
			return false;
		}


  		// checking phone number box is not empty and length is only 10
  		if (zf == "") {
   			alert("Mobile Number must be filled out");
    		return false;
  		}else if(zf.length!=10){
			alert("Your Mobile Number must be 10 digits");
			return false;
		}

		// checking Alternate phone number box is not empty and length is only 10
  		if (zg == "") {
   			alert("alternate Mobile Number must be filled out");
    		return false;
  		}else if(zg.length!=10){
			alert("Your alternate Mobile Number must be 10 digits");
			return false;
		}
		 
}
