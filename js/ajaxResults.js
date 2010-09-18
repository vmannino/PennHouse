//ajaxResults.js

function filterResults(){

$.get({
  url: 'search.php',
  data: ({avgRentMin:$'(name=avgRentMin)'.val(), avgRentMax:$'(name=avgRentMax)'.val(), ttlRentMin, ttlRentMax:$'(name=ttlRentMax)'.val(),llRtngMin:$'(name=llRtngMin)'.val(), llRtngMax:$'(name=llRtngMax)'.val(), hsRtngMin:$'(name=hsRtngMin)'.val(), hsRtngMax:$'(name=hsRtngMax)'.val(), bdrmMin:$'(name=bdrmMin)'.val(), bdrmMax:$'(name=bdrmMax).val()}),
  success: function(){
  
  },
  dataType: 'json'
});
}