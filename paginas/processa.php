<?php  
	/*require_once("../inc/MysqliDb.php");
    require_once("../inc/functions.php");
    ini_set('display_errors','Off');
    ini_set('error_reporting', E_ALL );
    date_default_timezone_set('America/Sao_Paulo');*/
    $db = new MysqliDb ('localhost', 'kiabhcom_loja', 'rt2Js*}JwQ#6', 'kiabhcom_loja');

    if($_POST){
    	$data = array(
    		'nome' => $_POST['nome'],
    		'email' => $_POST['email'],
    		'telefone' => $_POST['telefone'],
    		'modelo' => $_POST['modelo'],
    		'chassi' => $_POST['chassi'],
    		'ano_modelo' => $_POST['ano_modelo'],
    		'mensagem' => $_POST['mensagem'],
    		'nome_peca' => $_POST['nome-p'],
    		'codigo_peca' => $_POST['codigo-p'],
    		'quantidade' => $_POST['quantidade'],	
    	);
    	$db->insert("oc_cotacao_pecas",$data);
    	$bs = array('%NOME%','%EMAIL%','%TELEFONE%','%MODELO%','%CHASSI%','%ANOM%','%MSG%','%PECA%','%CODIGO%','%QTDE%','%ANO%');
		$tr = array($data['nome'],$data['email'],$data['telefone'],$data['modelo'],$data['chassi'],$data['ano_modelo'],$data['mensagem'],$data['nome_peca'],$data['codigo_peca'],$data['quantidade'],date("Y"));
		$corpo = alteraTexto($bs,$tr,$EMAILP);
		$envia = array(
			'from' => 'naoresponda@kiabrisa.com.br',
			'from_name' => "Kia Brisa",
			'to' => $data['email'],
			'to_name' => $data['nome'],
			'bcc' => 'marketing@kiabrisa.com.br',
			'bcc_name' => 'RedeAlpha',
			'assunto' => "Cotação de Peças - Kia Brisa",
			'mensagem' => $corpo,
		);
		$envia2 = array(
			'from' => 'naoresponda@kiabrisa.com.br',
			'from_name' => "Kia Brisa",
			'to' => 'pecas@kiabrisa.com.br',
			'to_name' => 'Kia Brisa',
			'assunto' => "Cotação de Peças - Kia Brisa",
			'mensagem' => $corpo,
		);
		
		EnviarEmail($envia);
		EnviarEmail($envia2);

		echo "<script>alert('Mensagem Enviada com Sucesso');window.location.href='https://cotacao.kiabrisa.com.br';</script>";
    }



?>