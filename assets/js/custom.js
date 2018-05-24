$(function () {

    var base_url = "http://localhost/WebEstacionamientos/";
   
          
            $("#bt_saludo").click(function (e) {
        e.preventDefault();
        var nombre = $("#nombre").val();

        $.ajax({
            url: base_url + 'welcome/proceso',
            type: 'POST',
            datatype: 'json',
            data: {nombre: nombre},
            success: function (o) {
                Materialize.toast(o.msg, "3000");
            },
            error: function () {
                Materialize.toast("Error 500", "3000");
            }
        });

    });
    
    
    
    $("#bt_log").click(function(e){
       e.preventDefault();
       var rut=$("#rutlog").val();
       var clave=$("#clavelog").val();
       //enviar datos
       $.ajax({
          url:base_url+'login',
          type:'post',
          dataType:'json',
          data:{rut:rut, clave:clave},
          success:function(o){
                if (o.msg=="404") {
                  Materialize.toast("Usuario no encontrado","4000");  
                }else{
                    window.location.href= base_url+o.msg;                    
                }
          },
          error:function(){
              Materialize.toast("Error 500","4000");
          }
       });
       
    });
});

