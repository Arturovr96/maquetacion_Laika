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