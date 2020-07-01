<div class="jumbotron">
	<div class="container">
		<h1 class="display">PEDIDO E COTAÇÃO DE PEÇAS</h1>
		<P>Com estoque próprio de peças e acessórios originais de fábrica, a KIA BRISA garante mais agilidade e qualidade na execução dos serviços e revisões do seu KIA. Tudo isso com o respaldo do Centro Nacional de Distribuição de Peças da KIA MOTORS DO BRASIL, que conta com mais de 12.000 metros quadrados de área de estocagem e 67.000 itens originais para reposição.</P>
		<p> Ligue agora: <a href="tel:+553125194001" class="link">  (31) 2519-4001 </a> </p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col">
			<div class="alert alert-success alert-dismissible hide" role="alert">
			  <strong>YES!</strong> Sua cotação foi enviada com sucesso. Em breve um de nossos consultores entrará em contato!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
	<form method="post" id="FormCot" action="processa"  accept-charset="utf-8">
		<div class="form-row">
			<label for="Nome"> Nome Completo *</label>
			<input type="text" name="nome" id="Nome" class="form-control form-control-lg" placeholder="Informe seu nome completo" required="required">
		</div>
		<div class="form-row">
			<div class="col">
				<label for="Email"> Email *</label>
				<input type="email" name="email" id="Email" class="form-control form-control-lg" placeholder="Informe seu e-mail" required="required">
			</div>
			<div class="col">
				<label for="Telefone"> Telefone</label>
				<input type="text" name="telefone" id="Telefone" class="form-control form-control-lg" placeholder="DDD + TELEFONE/CELULAR">
			</div>
		</div>
		<div class="form-row">
			<label for="Modelo"> Modelo *</label>
			<select name="modelo" id="Modelo" class="form-control form-control-lg" required="required">
				<option value="">Selecione</option>
				<option value="Picanto">Picanto</option>
				<option value="Rio">Rio</option>
        		<option value="Soul">Soul</option>
				<option value="Cerato">Cerato</option>
				<option value="Sportage">Sportage</option>    
				<option value="Optima">Optima</option>        
				<option value="Cadenza">Cadenza</option>       
				<option value="Carnival">Carnival</option>       
				<option value="Sorento">Sorento</option>       
				<option value="Mohave">Mohave</option>        
				<option value="Bongo">Bongo</option>        
				<option value="Carens">Carens</option>        
				<option value="Outros">Outros</option>
			</select>
		</div>
		<div class="form-row">
			<div class="col">
				<label for="Chassi"> Chassi *</label>
				<input type="text" name="chassi" id="Chassi" class="form-control form-control-lg" placeholder="Informe o chassi do carro" required="required">
			</div>
			<div class="col">
				<label for="AnoModelo"> Ano/Modelo</label>
				<input type="text" name="ano_modelo" id="AnoModelo" class="form-control form-control-lg" placeholder="Informe o ano/modelo">
			</div>
		</div>
		<div class="form-row">
			<label for="Msg"> Mensagem </label>
			<textarea name="mensagem" id="Msg" class="form-control form-control-lg" required="required" placeholder="Escreva aqui as suas considerações"></textarea>
		</div>
		<div class="form-row"><br><br> <hr></div>
		<div class="form-row">
			<h3 class="display"> Detalhes da Peça </h3>
		</div>
		<div class="form-row">
			<div class="col">
				<label for="NomeP"> Nome da Peça *</label>
				<input type="text" name="nome-p" id="NomeP" class="form-control form-control-lg" placeholder="Informe o nome da peça" required="required">
			</div>
			<div class="col">
				<label for="CodigoP"> Código da Peça </label>
				<input type="text" name="codigo-p" id="CodigoP" class="form-control form-control-lg" placeholder="Informe o código da peça" >
			</div>
			<div class="col">
				<label for="Qtde"> Quantidade * </label>
				<input type="number" name="quantidade" id="Qtde" class="form-control form-control-lg" value="1">
			</div>
		</div>
		<div class="form-row">
			<br><br>
			<button type="submit"  class="btn btn-lg btn-danger" > Solicitar Cotação </button>
		</div>
		<div class="form-row">
			<p class="text-justify">Parcelamento em até 5x nos cartões Visa e Mastercard, com parcela mínima de R$ 200,00 (duzentos reais). Consulte área de entrega gratuita. Promoções não cumulativas com outras promoções vigentes. A KIA BRISA reserva-se o direito de corrigir possíveis erros de digitação.</p>
		</div>
	</form>
</div>
