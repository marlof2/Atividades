$(document).ready(function () {

    function valida() {
  
        msgErro = []; 

        if ($("#nome").val() == "" ){
            msgErro.push("Nome");
        }
        if( $("#area").val() == ""){
            msgErro.push("Área");
        } 
        if( $("#intro").val() == "") {
            msgErro.push("Introdução");
        }

        if(msgErro.length > 0){
            swal('Ops', 'Preencha os campos: ' + msgErro.join(', ')   , "error");
            return false;
        }

        return true;
    }

    $("#btn-cadastrar").click(function (e) {
        e.preventDefault();

        if (valida()) {

            $dados = $('#forn').serialize();
            $.ajax({
                method: "POST",
                url: "create.php",
                data: $dados,
            }).done(function () {

                swal("Suecesso !", "Adicionado com Sucesso", "success")
                    .then((value) => {
                        if (value) { location.href = 'index.php'; }
                    });

            });


        }

    });


    $("#btn-editar").click(function (e) {
        e.preventDefault();
        if (valida()) {

            $dados = $('#forn').serialize();
            $.ajax({
                method: "POST",
                url: "update.php",
                data: $dados,
            })
                .done(function () {

                    swal("Suecesso !", "Adicionado com Sucesso", "success")
                        .then((value) => {
                            if (value) { location.href = 'index.php'; }
                        });

                });


        }
    });


    $('.excluir').click(function (e) {
        e.preventDefault();
        $id = $(this).prop('id');

        swal({
            title: "Tem certeza que deseja excluir?",
            text: "Esta operação não podera ser desfeita!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete == 1) {
                $.ajax({
                    method: "POST",
                    url: "delete.php",
                    data: $id
                });
                swal("Excluido com sucesso", {
                    icon: "success",
                }).then(() => {
                    window.location = "index.php";
                });
            } else {
                { location.href = 'index.php' };
            }
        });
    });

});