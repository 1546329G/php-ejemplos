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
            debugger;
             //console.log(result);
             const pacientes = result;
             pacientes.forEach(item => {
             agregarfilas("#tabla", iten);
        });

        }
    })
    return;
}
        function agregarfilas (id, paciente) {
            const html =
            "<tr>"+
            "<td>"+paciente. Nombres+"</td>"+
            "<td>"+paciente.Edad+"</td>"+
            "<td>"+paciente.talla+"</td>"+
            "<td>"+paciente.peso+"</td>"+
            "<td>"+paciente.Tos+"</td>"+
            "<td>"+paciente.Fiebre+"</td>"+
            "<td>"+paciente.Disnea+"</td>"+
            "<td><button type='button'>Editar</></td>"+
            "</tr>";
            $(id +" tr:last").after(html);
    }





