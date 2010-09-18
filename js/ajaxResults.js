//ajaxResults.js


function filterResults(){

$.ajax({
  url: 'search.php',
  data: ({ avgRentMin : $('input[name=avgRentMin]').val(), avgRentMax : $('input[name=avgRentMax]').val(), ttlRentMin : $('input[name=ttlRentMin]').val(), ttlRentMax : $('input[name=ttlRentMax]').val(),llRtngMin : $('input[name=llRtngMin]').val(), llRtngMax : $('input[name=llRtngMax]').val(), hsRtngMin : $('input[name=hsRtngMin]').val(), hsRtngMax : $('input[name=hsRtngMax]').val(), bdrmMin : $('input[name=bdrmMin]').val(), bdrmMax : $('input[name=bdrmMax]').val()}),
  success: function(data){
  //
  },
  error:function(xhr,err){
	  /*error
    alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
    alert("responseText: "+xhr.responseText);
	*/
}
});

}