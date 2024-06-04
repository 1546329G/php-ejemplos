function BuscarPacientes(){
    const nombre =  $("#nombre").val();
    //alert("buscando..."+nombre0);

     let datos ={
        nombre : $nombre

     };
    $.ajax({
        url :"p26_ajax_pdo.php",
        type : "post",
        data :datos,
        succes : function(result){
            console.log(result);

        }
    })
    return;
}