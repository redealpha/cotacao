function sendForm(){
	var nome = document.getElementById("Nome").value;
	var email = document.getElementById("Email").value;
	var telefone = document.getElementById("Telefone").value;
	var modelo = document.getElementById("Modelo").value;
	var chassi = document.getElementById("Chassi").value;
	var ano_modelo = document.getElementById("AnoModelo").value;
	var mensagem = document.getElementById("Msg").value;
	var nome_p = document.getElementById("NomeP").value;
	var codigo_p = document.getElementById("CodigoP").value;
	var quantidade = document.getElementById("Qtde").value;
	if(nome == ''|| email == '' || telefone ==''){
		alert("Por favor, preencha todos os campos!");
	} else {
		var dataString = "nome="+nome+"&email="+email+"&telefone="+telefone+"&modelo="+modelo+"&chassi="+chassi+"&ano_modelo="+ano_modelo+"&mensagem="+mensagem+"&nome-p="+nome_p+"&codigo-p="+codigo_p+"&quantidade="+quantidade;
		$.ajax({
			type: "POST",
			url: "../paginas/processa.php",
			data: dataString,
			cache: false,
			success: function(){
				alert("Mensagem enviada com sucesso. \n Aguarde o contato de um de nossos consultores.");
				document.getElementById("Nome").value='';
				document.getElementById("Email").value='';
				document.getElementById("Telefone").value='';
				document.getElementById("Modelo").value='';
				document.getElementById("Chassi").value='';
				document.getElementById("AnoModelo").value='';
				document.getElementById("Msg").value='';
				document.getElementById("NomeP").value='';
				document.getElementById("CodigoP").value='';
				document.getElementById("Qtde").value='';
				
			}
		});
	}
	return false;

}