
function randomString() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 8;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	return randomstring;
}
	$(function (e) {
        $("#generate").click(function(){ 
		var d = new Date();
		var strDate = d.getFullYear() + "" + (d.getMonth()+1) + "" + d.getDate();
   		$('#user').val("S"+randomString());
   		$('#pass').val(randomString());
         
          e.preventDefault();
		 
        });
		
      });		