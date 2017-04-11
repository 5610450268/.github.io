// JavaScript Document
function saveData(){
	localStorage.setItem("firstname",document.getElementById("firstname").value);
	localStorage.setItem("lastname",document.getElementById("lastname").value);
	localStorage.setItem("houseNumber",document.getElementById("houseNumber").value);
	localStorage.setItem("street",document.getElementById("street").value);
	localStorage.setItem("city",document.getElementById("city").value);
	localStorage.setItem("province",document.getElementById("province").value);
	localStorage.setItem("zipcode",document.getElementById("zipcode").value);
	localStorage.setItem("phone",document.getElementById("phone").value);
	localStorage.setItem("cellPhone",document.getElementById("cellPhone").value);
	localStorage.setItem("birthday",document.getElementById("birthday").value);
	localStorage.setItem("citizenship",document.getElementById("citizenship").value);
	localStorage.setItem("zodiacSign",document.getElementById("zodiacSign").value);
	localStorage.setItem("zodiacYear",document.getElementById("zodiacYear").value);
	localStorage.setItem("bdWeek",document.getElementById("bdWeek").value);
}
window.onload = function(){
	document.getElementById("firstname").value = localStorage.getItem("firstname");
	document.getElementById("lastname").value = localStorage.getItem("lastname");
	document.getElementById("houseNumber").value = localStorage.getItem("houseNumber");
	document.getElementById("street").value = localStorage.getItem("street");
	document.getElementById("city").value = localStorage.getItem("city");
	document.getElementById("province").value = localStorage.getItem("province");
	document.getElementById("zipcode").value = localStorage.getItem("zipcode");
	document.getElementById("phone").value = localStorage.getItem("phone");
	document.getElementById("cellPhone").value = localStorage.getItem("cellPhone");
	document.getElementById("birthday").value = localStorage.getItem("birthday");
	document.getElementById("citizenship").value = localStorage.getItem("citizenship");
	document.getElementById("zodiacSign").value = localStorage.getItem("zodiacSign");
	document.getElementById("zodiacYear").value = localStorage.getItem("zodiacYear");
	document.getElementById("bdWeek").value = localStorage.getItem("bdWeek");
}
function onSelectedItem(id,index){
	if(id == document.getElementById("zodiacSign").id) document.getElementById("zodiacSign").selectedIndex = index;
	if(id == document.getElementById("zodiacYear").id) document.getElementById("zodiacYear").selectedIndex = index;
}
function onSelectedDate(){
	var bdWeek = new Date(document.getElementById("bdWeek").value);
	var day = bdWeek.getDay();
	document.getElementById("bdWeek").selectedIndex = day;
}
function validateForm(){
	var firstname = document.forms["profile"]["firstname"].value;
	var lastname = document.forms["profile"]["lastname"].value;
	var houseNumber = document.forms["profile"]["houseNumber"].value;
	var street = document.forms["profile"]["street"].value;
	var city = document.forms["profile"]["city"].value;
	var province = document.forms["profile"]["province"].value;
	var zipcode = document.forms["profile"]["zipcode"].value;
	var phone = document.forms["profile"]["phone"].value;
	var cellPhone = document.forms["profile"]["cellPhone"].value;
	var citizenship = document.forms["profile"]["citizenship"].value;
	if(firstname == ""){
		window.alert("Please enter Firstname");
		return false;
	}
	if(lastname == ""){
		window.alert("Please enter Lastname");
		return false;
	}if(houseNumber == ""){
		window.alert("Please enter House number");
		return false;
	}
	if(street == ""){
		window.alert("Please enter Street");
		return false;
	}
	if(city == ""){
		window.alert("Please enter City");
		return false;
	}
	if(province == ""){
		window.alert("Please enter Province");
		return false;
	}
	if(zipcode == ""){
		window.alert("Please enter Zipcode");
		return false;
	}
	var isphone = /[\+662][\-]\d{3}[\-]\d{3}/;
	if(!phone.match(isphone) && phone!="") {
    	window.alert("Phone number does not match the format");
    	return false;
  	}  
	var phoneno = /[\+66]\d{2}[\-]\d{3}[\-]\d{4}$/;
	if(!cellPhone.match(phoneno) && cellPhone!="") {
		window.alert("Cell phone number does not match the format");
		return false;
	} 
	if(isNaN(citizenship)){
		window.alert("This field is required number");
		return false;
	} 
	if(citizenship == ""){
		window.alert("Please enter Citizenship number");
		return false;
	}
	if(citizenship.length <13){
		window.alert("This field is required 13 characters length");
		return false;
	}
	setCookie("firstname", firstname, 365);
	setCookie("lastname", lastname, 365);
	setCookie("houseNumber", houseNumber, 365);
	setCookie("street", street, 365);
	setCookie("city", city, 365);
	setCookie("province", province, 365);
	setCookie("zipcode", zipcode, 365);
	setCookie("phone", phone, 365);
	setCookie("cellPhone", cellPhone, 365);
	setCookie("birthday", birthday, 365);
	setCookie("citizenship", citizenship, 365);
	setCookie("zodiacSign", zodiacSign, 365);
	setCookie("zodiacYear", zodiacYear, 365);
	setCookie("bdWeek", bdWeek, 365);
	checkCookie();
}
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var firstname = getCookie("firstname");
    var lastname = getCookie("lastname");
    var houseNumber = getCookie("houseNumber");
    var street = getCookie("street");
    var city = getCookie("city");
    var province = getCookie("province");
    var zipcode = getCookie("zipcode");
    var phone = getCookie("phone");
    var cellPhone = getCookie("cellPhone");
    var birthday = getCookie("birthday");
    var citizenship = getCookie("citizenship");
    var zodiacSign = getCookie("zodiacSign");
    var zodiacYear = getCookie("zodiacYear");
    var bdWeek = getCookie("bdWeek");
    var s = "First name : "+firstname+
    "\nLastname : "+lastname+
    "\nHouseNumber : "+houseNumber+
    "\nStreet : "+street+
    "\nCity : "+city+
    "\nProvince : "+province+
    "\nZipcode : "+zipcode+
    "\nPhone : "+phone+
    "\ncellPhone : "+cellPhone+
    "\nbirthday : "+birthday+
    "\ncitizenship : "+citizenship+
    "\nzodiacSign : "+zodiacSign+
    "\nzodiacYear : "+zodiacYear+
    "\nbdWeek : "+bdWeek;
    if (window.confirm(s) == true) {
		//<a href="Table.php"></a>
		window.location="TableData.php";
    }
}