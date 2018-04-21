 <!-- SCRIPTS -->
 <!-- JQuery -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
 <script>

 	
 	
 	$(document).ready(function(){
 		new WOW().init();
 		$('#summernote').summernote();
 
 		$(document).on('change', '.btn-file :file', function() {
 			var input = $(this),
 			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
 			input.trigger('fileselect', [label]);
 		});

 		$('.btn-file :file').on('fileselect', function(event, label) {

 			var input = $(this).parents('.input-group').find(':text'),
 			log = label;

 			if( input.length ) {
 				input.val(log);
 			} else {
 				if( log ) alert(log);
 			}

 		});
 		function readURL(input) {
 			if (input.files && input.files[0]) {
 				var reader = new FileReader();

 				reader.onload = function (e) {
 					$('#img-upload').attr('src', e.target.result);
 				}

 				reader.readAsDataURL(input.files[0]);
 			}
 		}

 		$("#imgInp").change(function(){
 			readURL(this);
 		});
 		 	$("#change_this").click(function(){
 		$("#poof").hide();
 		$("#img-upload").width("225px");
 		$("#img-upload").height("225px");
 	}); 	
 	}); 	
 </script>