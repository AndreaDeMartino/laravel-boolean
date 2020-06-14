require('./bootstrap');

$(document).ready(function () {
  console.log('jQuery Ok');
  
  var filter = $('#filter'),

  // Get protocol and url with window.location
  apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders';
  
  filter.on('change', function(){
    var gender = $(this).val();
    
    $.ajax({
      url: apiUrl,
      method: 'POST',
      data: {
        filter : gender
      },
      success: function (res) {
        // Check Result
        if(res.response.length() > 0){

        } else{
          console.log(res.error);
        };
        
        
      },
      error: function () {
        console.log('errore Api');
        
      }
    })
  })
  
});