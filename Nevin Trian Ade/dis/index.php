<!DOCTYPE html>


	<div class="container mb-3">
		<span id="message"></span>
	   	<div id="display_comment"></div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				var form_data = $(this).serialize();
				$.ajax({
					url:"tambah_komentar.php",
					method:"POST",
					data:form_data,
					success:function(data)
					{
						$('#form_komen')[0].reset();
						$('#KD_DIS').val('0');
						load_comment();
					}
				})
			});

			load_comment();

			function load_comment()
			{
				$.ajax({
					url:"lib/ambil_komentar.php",
					method:"POST",
					success:function(data)
					{
						$('#display_comment').html(data);
					}
				})
			}

			$(document).on('click', '.reply', function(){
				var KD_DIS = $(this).attr("id");
				$('#KD_DIS').val(KD_DIS);
				$('#USERNAME').focus();
			});
		});
	</script>

</html>