require('./bootstrap');

$(document).ready(function () {
  console.log('jQuery Ok');
  
  /****************************************************
  * VARIABLES 
  ****************************************************/
  var filter = $('#filter');
  var container = $('.students');
  // Get protocol and url with window.location
  var apiUrl = window.location.protocol + '//' + window.location.host + '/api/students/genders';
  // Handlebars
  var source = $('#student-template').html();
  var template = Handlebars.compile(source);

  
  // Filter on Select menu
  filter.on('change', function(){
    var gender = $(this).val();
    
    $.ajax({
      url: apiUrl,
      method: 'POST',
      data: {
        filter : gender
      },
      success: function (res) {
        // Clean Container
        container.html('');
        // Check Result
        if(res.response.length > 0){

          for(var i = 0; i < res.response.length; i++){
            var item = res.response[i];

            var context = {
              slug: item.slug,
              img: item.img,
              nome: item.nome,
              eta: item.eta,
              assunzione: (item.genere == 'm') ? 'Assunto':'Assunta',
              azienda: item.azienda,
              ruolo: item.ruolo,
              descrizione: item.descrizione
            }

            // Append filter content on container
            var output = template(context);
            container.append(output);
          }

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