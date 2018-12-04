<div id="myModal" class="modal" style="font-size:0.7em;">
	<script type="text/javascript">
		$(document).ready(function(){
			$("#orderSend").click(function(){
				$('#oderErrorShow').hide();
				var yourName = $("#yourName").val ();
				var yourNumber = $("#yourNumber").val ();
				var adr_pattern = /[0-9a-z_-]+@/i;
				var fail = "";
				if (yourName.length < 3)   
					fail ="Имя не меньше трех символов";
				else if (yourName == "" || yourName == " ")
					fail ="Введите имя";
				else if (yourNumber.length < 9)
					fail ="номер должн быть с кодом";
				else if (yourName == "" || yourName == " ")
					fail ="Введите ваш номер";
				if(fail != "") {
					$('#orderErrorShow').html(fail);
					$('#orderErrorShow').show();
					return false;	
				}
				$.ajax({
				url: "order.php",
				type: "POST",
				data:{'name':yourName,'number': yourNumber,},  
				dataType: "html", 
				beforeSend: function () {$("#orderErrorShow").text("Ожидание данных..."); $('#oderErrorShow').show();},  
				success: function (data) {
					$('#orderErrorShow').html("Данные переданы");
					$('#orderErrorShow').show();
					}
				});		
			});
		});
	</script>
	<div id="modal_content">
		<div class="close">&times;</div>
		<form action="" method="post">
			<div id="orderErrorShow" style="color: red;"></div>
			<label for="yourName">Введите ваше имя:</label>
			<input class="one" type="text" id="yourName" name="yourName" placeholder="имя..."   maxlength="13"/>
			<label for="yourNumber">Ваш номер:</label>
			<input class="one"type="phone" id="yourNumber" name="yourNumber" onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" placeholder="+998......" maxlength="13" />
			<input type="button" value="Отправить" id="orderSend" name="button" />
		</form>
	</div><script src="js/modal.js" type="text/javascript"></script>
</div>