//ajaxResults.js

function filterResults(){

$.get({
  url: 'search.php',
  data: ({ avgRentMin, avgRentMax, ttlRentMin, ttlRentMax,llRtngMin, llRtngMax, hsRtngMin, hsRtngMax, bdrmMin, bdrmMax}),
  success: function(){
  
  },
  dataType: 'json'
});
}