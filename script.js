$(document).ready(function() {
	//Listening if the city selector has changed
	$("#city").change(function(event) {
		$("body").find('#wilaya').children('.added').remove();//Removing the old 
		/* Act on the event */
		var value=$(this).val();//Catching the value!
		if (value!='') {//Making sure that the value is not empty
			//then sending the data to ajaxpage.php via post method
			$.post('ajaxpage.php', {value:value}, function(data, textStatus, xhr) {
				$("body").find('#wilaya').append(data);//Adding the response to the Wilaya select!
			});
		}
	});
});