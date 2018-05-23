 <!-- SCRIPTS -->
 <!-- JQuery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"ss></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
 <script>
 	//Show Thanks after giving vote
 	function thanks(id){

 		$("#" + id).hide();
        var count = $("#count"+id).text();
        var num = parseInt(count);
        num +=1;
        $("#count"+id).text(num)

    };


    $(document).ready(function(){
     new WOW().init();
     $('#summernote').summernote();
     $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        $("input[name ='upload']").trigger('click');
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
  $("#star002").click(function(){
    $('input:radio[name=sex]:nth(0)').attr('checked',false);
    $("#star001").css("color", "yellow");
});
  $("#star003").click(function(){
    $('input:radio[name=sex]:nth(0)').attr('checked',false);
    $('input:radio[name=sex]:nth(1)').attr('checked',false);
    $("#star001").css("color", "yellow");
    $("#star002").css("color", "yellow");
});
  $("#star004").click(function(){
    $('input:radio[name=sex]:nth(0)').attr('checked',false);
    $('input:radio[name=sex]:nth(1)').attr('checked',false);
    $('input:radio[name=sex]:nth(2)').attr('checked',false);
    $("#star001").css("color", "yellow");
    $("#star002").css("color", "yellow");
    $("#star003").css("color", "yellow");
})
  $("#star005").click(function(){
    $('input:radio[name=sex]:nth(0)').attr('checked',false);
    $('input:radio[name=sex]:nth(1)').attr('checked',false);
    $('input:radio[name=sex]:nth(2)').attr('checked',false);
    $('input:radio[name=sex]:nth(3)').attr('checked',false);
    $("#star001").css("color", "yellow");
    $("#star002").css("color", "yellow");
    $("#star003").css("color", "yellow");
    $("#star004").css("color", "yellow");
})

 		//For reload pressing f5 or refresh button

 		var ScrollSneak = function(prefix, wait) {
    // clean up arguments (allows prefix to be optional - a bit of overkill)
    if (typeof(wait) == 'undefined' && prefix === true) prefix = null, wait = true;
    prefix = (typeof(prefix) == 'string' ? prefix : window.location.host).split('_').join('');
    var pre_name;

    // scroll function, if window.name matches, then scroll to that position and clean up window.name
    this.scroll = function() {
    	if (window.name.search('^'+prefix+'_(\\d+)_(\\d+)_') == 0) {
    		var name = window.name.split('_');
    		window.scrollTo(name[1], name[2]);
    		window.name = name.slice(3).join('_');
    	}
    }
    // if not wait, scroll immediately
    if (!wait) this.scroll();

    this.sneak = function() {
	// prevent multiple clicks from getting stored on window.name
	if (typeof(pre_name) == 'undefined') pre_name = window.name;

	// get the scroll positions
	var top = 0, left = 0;
        if (typeof(window.pageYOffset) == 'number') { // netscape
        	top = window.pageYOffset, left = window.pageXOffset;
        } else if (document.body && (document.body.scrollLeft || document.body.scrollTop)) { // dom
        	top = document.body.scrollTop, left = document.body.scrollLeft;
        } else if (document.documentElement && (document.documentElement.scrollLeft || document.documentElement.scrollTop)) { // ie6
        	top = document.documentElement.scrollTop, left = document.documentElement.scrollLeft;
        }
	// store the scroll
	if (top || left) window.name = prefix + '_' + left + '_' + top + '_' + pre_name;
	return true;
}
}

}); 	 	
</script>