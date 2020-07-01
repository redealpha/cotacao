	
	<script src="<?=URL::getBase()?>assets/popper.js" async defer></script>
	<script src="<?=URL::getBase()?>assets/bootstrap.js" async defer></script>
	<script src="<?=URL::getBase()?>assets/jquery.mask.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script type="text/javascript">
		$('.alert').hide();
		$(document).ready(function(){
		  var SPMaskBehavior = function (val) {
		    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		  },
		  spOptions = {
		    onKeyPress: function(val, e, field, options) {
		        field.mask(SPMaskBehavior.apply({}, arguments), options);
		      }
		  };
		  $('#Telefone').mask(SPMaskBehavior, spOptions);
		  document.getElementById("enviar").onclick = function(){sendForm()};
		});


	</script>
</body>
</html>