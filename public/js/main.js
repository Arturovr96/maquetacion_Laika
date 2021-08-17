function modal_cuenta(id){
    $.ajax({
        type: "GET",
        url:  "modalcuenta",
        data: {id:id}
    })
    .done(function(data) {
        $("#modalCuenta").html(data); 
    });
}
function informacion(id){
    if(id==1){
        $('#boton1').addClass('active');
        $('#beneficios').show();
        $('#boton2').removeClass('active');
        $('#caracteristicas').hide();
        $('#boton3').removeClass('active');
        $('#descripcion').hide();
    }
    if(id==2){
        $('#boton2').addClass('active');
        $('#caracteristicas').show();
        $('#boton1').removeClass('active');
        $('#beneficios').hide();
        $('#boton3').removeClass('active');
        $('#descripcion').hide();
    }
    if(id==3){
        $('#boton3').addClass('active');
        $('#boton1').removeClass('active');
        $('#beneficios').hide();
        $('#boton2').removeClass('active');
        $('#caracteristicas').hide();
        $('#descripcion').show();
    }
    
}