function autofill(){
	document.getElementById('first_name').value = "John";
	document.getElementById('last_name').value = "Smith";

	document.getElementById('email').value = "johnsmith@gmail.com";
	document.getElementById('address').value = "1 Fake Street";
	document.getElementById('suburb').value = "Fakeville";
	document.getElementById('postcode').value = "6969";
	document.getElementsByClassName('filter-option')[0].textContent = "VIC";
	document.getElementById('state').value = "VIC";

	document.getElementsByClassName('filter-option')[1].textContent = 25;
	document.getElementsByClassName('filter-option')[2].textContent = "Dec";
	document.getElementsByClassName('filter-option')[3].textContent = 1969;

	document.getElementById('day').value = 25;
	document.getElementById('month').value = "Dec";
	document.getElementById('year').value = 1969;

	document.getElementById('question').value = "Aden is a pimp and a cool";

	document.getElementById('tandc').checked = true;

	$('#theform').submit()

}