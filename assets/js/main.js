/*--------------------------------------------------------------
# Mian Js Start
--------------------------------------------------------------*/
(function($) {

  function zakatXeCalculator() {

    // Reset form in-case of currency change
    $("#savings, #metals, #loans").val("");
    $("#nisab, #total, #zakat").attr("placeholder", "");

    // Get currency
    var currency = $("#currency").val();

    $.ajax({
      url: "https://data-asg.goldprice.org/dbXRates/"+currency,
      success: function(data){

        var nisabDate = data.date;
        var curr = data.items[0].curr;
        nisab = data.items[0].xagPrice*21;

        $(".zakat-alerts").html('');
        $("#nisab-date").html("Updated on: "+nisabDate);
        $("#nisab").attr( "placeholder", nisab.toFixed(2)+" "+curr );

      },
      error: function(error){

        $(".zakat-alerts").html('<div class="alert alert-danger alert-dismissible" role="alert">'+
          '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
            '<span aria-hidden="true">&times;</span>'+
          '</button>'+
          '<strong>Error!</strong> couldn\'t connect to API, Select currency again.'+
        '</div>');

        $(".zakat-xe").trigger("reset");
        $("#currency").val("Curr");
        $("#nisab, #total, #zakat").attr("placeholder", "");

      }
    });

  }
  zakatXeCalculator();
  $("#currency").change(zakatXeCalculator);

  // Calculate total and zakat
  $("#savings, #metals, #loans").on('input propertychange', function(){

    var savings = $("#savings").val();
    var metals = $("#metals").val();
    var loans = $("#loans").val();
    var total = Number(savings) + Number(metals) + Number(loans);

    $("#total").attr("placeholder", total);

    // Calculate zakat and display it
    var zakat = 2.5/100 * total/1;

    if ( total >= nisab.toFixed(2) ) {

      $("#zakat").attr("placeholder", zakat.toFixed(2));
      $(".zakat-alerts").html("");

    } else {

      $("#zakat").attr("placeholder", "0");
      $(".zakat-alerts").html('<div class="alert alert-success alert-dismissible" role="alert">'+
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
          '<span aria-hidden="true">&times;</span>'+
        '</button>'+
        'You are exempted from Zakat.'+
      '</div>');

    }

  });

  // Reset fields
  $("#zakat-reset").on('click', function(event){

    event.preventDefault();
    $('.zakat-xe')[0].reset();
    $("#nisab, #total, #zakat").attr("placeholder", "");
    $(".zakat-alerts").html("");
    zakatXeCalculator();

  });

})( jQuery );