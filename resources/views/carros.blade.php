<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title_app')</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <meta name="author"                content="Anders JS">
        <meta name="description"           content="Projeto de Teste">
        <meta name="keywords" content="">

        <!-- FONTS GOOGLEAPIS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">

        <!-- LIB JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>

        <div class="main">

            <div class="content c2">
                <div class="bloco">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success cp" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Add Novo Carro
                    </button>

                    <!-- Controle para renderizacao dos atributos -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Ano</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($carros as $carro)
                                <tr id="ln{{ $carro->id }}">
                                    <th scope="row">
                                        {{ $carro->id }}:
                                        <button type="button" class="btn btn-danger btn-sm btn_action" id="btnRemover" onClick="acaoRmv({{ $carro->id }})">
                                            <ion-icon name="close-circle-outline"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-info btn-sm btn_action" id="btnAtualizar" onClick="listaFormAlt({{ $carro->id }})">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </button>
                                    </th>
                                    <td>{{ $carro->marca }}</td>
                                    <td>{{ $carro->modelo }}</td>
                                    <td>{{ $carro->ano }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div id="resultado"></div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><ion-icon name="accessibility-outline"></ion-icon> Cadastrar Carro</h5>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <input type="hidden" name="id" value="0">
                                        <div  class="col-md-12 cp">
                                            <label for="validationCustom01" class="form-label">Marca</label>
                                            <input type="text" class="form-control" id="validationCustom01" required name="marca">
                                        </div>
                                        <div  class="col-md-12 cp">
                                            <label class="form-label">Modelo</label>
                                            <input type="text" class="form-control" id="validationCustom01" required name="modelo">
                                        </div>
                                        <div  class="col-md-12 cp">
                                            <label class="form-label">Ano</label>
                                            <input type="text" class="form-control" id="validationCustom01" required name="ano">
                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" id="btnFecharForm">Fechar</button>
                                    <button type="button" class="btn btn-success" id="btnSalvar">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            

        </div>

        <div class="pg_footer">
            {{ date('Y') }} - by: Anderson JS
        </div>

        <!-- IONICICON -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <!-- POPPER JS & BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <!-- SWEERALERT -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script type="text/javascript">


            // CONFIGURACAO PADRAO CSRF
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });

            // Listar e popular o formulario para alerar registro
            function listaFormAlt(id){
                $.getJSON("{{ asset('lst/carro') }}/"+ id, function(data){
                    $("input[name='id']").val(id);
                    $("input[name='marca']").val(data.marca);
                    $("input[name='modelo']").val(data.modelo);
                    $("input[name='ano']").val(data.ano);
                    $("#staticBackdrop").modal('show');
                });
            }

            // Funcao ADD/ALT registro
            $("#btnSalvar").click(function(){
                if($("input[name='id']").val()>0){
                    //ALT
                    altCarro();
                } else {
                    //ADD
                    addCarro();
                }
            });

            // Adicionar registro
            function addCarro(){
                carro = {
                    marca: $("input[name='marca']").val(),
                    modelo: $("input[name='modelo']").val(),
                    ano: $("input[name='ano']").val()
                };
                $.post("{{ asset('add/carro') }}", carro, function(){
                    $("input[name='marca'],input[name='modelo'],input[name='ano']").val('');
                    Swal.fire('Carro cadastrado.', '', 'success');
                });
            }

            // Alterar registro
            function altCarro(){
                carro = {
                    id: $("input[name='id']").val(),
                    marca: $("input[name='marca']").val(),
                    modelo: $("input[name='modelo']").val(),
                    ano: $("input[name='ano']").val()
                };
                $.post("{{ asset('alt/carro') }}/"+ carro.id, carro, function(){
                    Swal.fire('Carro Alterado.', '', 'success');
                });
            }

            // Acao para remover/deletar registros
            function acaoRmv(id){
                Swal.fire({
                    title: 'Deseja realmente remover o registro?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Sim',
                    denyButtonText: `Não`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ asset('rmv/carro') }}/"+ id,
                            type: "delete",
                            context: this,
                            success: function(){
                                $('#ln'+ id).hide(200);
                                Swal.fire('Carro removido.', '', 'success');
                            },
                            error: function(erro){
                                Swal.fire(erro, '', 'warning');
                            }
                        });
                    } else if (result.isDenied) {
                        Swal.fire('Nenhuma ação efetuada.', '', 'info');
                    }
                });
            }

            // Acoes para renderizar e recarregar pagina
            $("#btnFecharForm").click(function(){
                window.location.assign("{{ asset('/') }}");
            });

        </script>

    </body>
</html>