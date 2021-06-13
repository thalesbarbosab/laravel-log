<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('title')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="/vendor/toast/toast.css">
        <link rel="stylesheet" href="/vendor/toastr/toastr.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    </head>
    <body>
        <div class="container">
            @yield('body')
        </div>
        <!-- customize js -->
        @yield('js')
        <!-- Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!-- jQuery 3.4.1 -->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <!-- Datatables -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready( function () {
                $('.datatables').DataTable({
                    language: {
                        "emptyTable": "Nenhum registro encontrado",
                        "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                        "infoEmpty": "Mostrando 0 até 0 de 0 registros",
                        "infoFiltered": "(Filtrados de _MAX_ registros)",
                        "infoThousands": ".",
                        "loadingRecords": "Carregando...",
                        "processing": "Processando...",
                        "zeroRecords": "Nenhum registro encontrado",
                        "search": "Pesquisar",
                        "paginate": {
                            "next": "Próximo",
                            "previous": "Anterior",
                            "first": "Primeiro",
                            "last": "Último"
                        },
                        "aria": {
                            "sortAscending": ": Ordenar colunas de forma ascendente",
                            "sortDescending": ": Ordenar colunas de forma descendente"
                        },
                        "select": {
                            "rows": {
                                "_": "Selecionado %d linhas",
                                "0": "Nenhuma linha selecionada",
                                "1": "Selecionado 1 linha"
                            },
                            "1": "%d linha selecionada",
                            "_": "%d linhas selecionadas",
                            "cells": {
                                "1": "1 célula selecionada",
                                "_": "%d células selecionadas"
                            },
                            "columns": {
                                "1": "1 coluna selecionada",
                                "_": "%d colunas selecionadas"
                            }
                        },
                        "buttons": {
                            "copySuccess": {
                                "1": "Uma linha copiada com sucesso",
                                "_": "%d linhas copiadas com sucesso"
                            },
                            "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                            "colvis": "Visibilidade da Coluna",
                            "colvisRestore": "Restaurar Visibilidade",
                            "copy": "Copiar",
                            "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                            "copyTitle": "Copiar para a Área de Transferência",
                            "csv": "CSV",
                            "excel": "Excel",
                            "pageLength": {
                                "-1": "Mostrar todos os registros",
                                "1": "Mostrar 1 registro",
                                "_": "Mostrar %d registros"
                            },
                            "pdf": "PDF",
                            "print": "Imprimir"
                        },
                        "autoFill": {
                            "cancel": "Cancelar",
                            "fill": "Preencher todas as células com",
                            "fillHorizontal": "Preencher células horizontalmente",
                            "fillVertical": "Preencher células verticalmente"
                        },
                        "lengthMenu": "Exibir _MENU_ resultados por página",
                        "searchBuilder": {
                            "add": "Adicionar Condição",
                            "button": {
                                "0": "Construtor de Pesquisa",
                                "_": "Construtor de Pesquisa (%d)"
                            },
                            "clearAll": "Limpar Tudo",
                            "condition": "Condição",
                            "conditions": {
                                "date": {
                                    "after": "Depois",
                                    "before": "Antes",
                                    "between": "Entre",
                                    "empty": "Vazio",
                                    "equals": "Igual",
                                    "not": "Não",
                                    "notBetween": "Não Entre",
                                    "notEmpty": "Não Vazio"
                                },
                                "number": {
                                    "between": "Entre",
                                    "empty": "Vazio",
                                    "equals": "Igual",
                                    "gt": "Maior Que",
                                    "gte": "Maior ou Igual a",
                                    "lt": "Menor Que",
                                    "lte": "Menor ou Igual a",
                                    "not": "Não",
                                    "notBetween": "Não Entre",
                                    "notEmpty": "Não Vazio"
                                },
                                "string": {
                                    "contains": "Contém",
                                    "empty": "Vazio",
                                    "endsWith": "Termina Com",
                                    "equals": "Igual",
                                    "not": "Não",
                                    "notEmpty": "Não Vazio",
                                    "startsWith": "Começa Com"
                                },
                                "array": {
                                    "contains": "Contém",
                                    "empty": "Vazio",
                                    "equals": "Igual à",
                                    "not": "Não",
                                    "notEmpty": "Não vazio",
                                    "without": "Não possui"
                                }
                            },
                            "data": "Data",
                            "deleteTitle": "Excluir regra de filtragem",
                            "logicAnd": "E",
                            "logicOr": "Ou",
                            "title": {
                                "0": "Construtor de Pesquisa",
                                "_": "Construtor de Pesquisa (%d)"
                            },
                            "value": "Valor"
                        },
                        "searchPanes": {
                            "clearMessage": "Limpar Tudo",
                            "collapse": {
                                "0": "Painéis de Pesquisa",
                                "_": "Painéis de Pesquisa (%d)"
                            },
                            "count": "{total}",
                            "countFiltered": "{shown} ({total})",
                            "emptyPanes": "Nenhum Painel de Pesquisa",
                            "loadMessage": "Carregando Painéis de Pesquisa...",
                            "title": "Filtros Ativos"
                        },
                        "searchPlaceholder": "Digite o que deseja",
                        "thousands": ".",
                        "datetime": {
                            "previous": "Anterior",
                            "next": "Próximo",
                            "hours": "Hora",
                            "minutes": "Minuto",
                            "seconds": "Segundo",
                            "amPm": [
                                "am",
                                "pm"
                            ],
                            "unknown": "-"
                        },
                        "editor": {
                            "close": "Fechar",
                            "create": {
                                "button": "Novo",
                                "submit": "Criar",
                                "title": "Criar novo registro"
                            },
                            "edit": {
                                "button": "Editar",
                                "submit": "Atualizar",
                                "title": "Editar registro"
                            },
                            "error": {
                                "system": "Ocorreu um erro no sistema (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">Mais informações<\/a>)."
                            },
                            "multi": {
                                "noMulti": "Essa entrada pode ser editada individualmente, mas não como parte do grupo",
                                "restore": "Desfazer alterações",
                                "title": "Multiplos valores",
                                "info": "Os itens selecionados contêm valores diferentes para esta entrada. Para editar e definir todos os itens para esta entrada com o mesmo valor, clique ou toque aqui, caso contrário, eles manterão seus valores individuais."
                            },
                            "remove": {
                                "button": "Remover",
                                "confirm": {
                                    "_": "Tem certeza que quer deletar %d linhas?",
                                    "1": "Tem certeza que quer deletar 1 linha?"
                                },
                                "submit": "Remover",
                                "title": "Remover registro"
                            }
                        },
                        "decimal": ","
                    }
                });
            } );
        </script>
        <!-- Plugin Toast JS -->
        <script src="/vendor/toast/toast.js"></script>
        <!-- Plugin Toastr -->
        <script src="/vendor/toastr/toastr.js"></script>
        <!-- Showing the validation messages-->
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <script type="text/javascript">
                    $(function() {
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": true,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": true,
                            "showDuration": "800",
                            "hideDuration": "1000",
                            "timeOut": "8000",
                            "extendedTimeOut": "1500",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        toastr.error('<b>@lang("validation.generic.verify_data")</b><br><p>{{$error}}</p><br>')
                    })
                </script>
            @endforeach
        @endif
        <!-- Showing the notification messages-->
        @if(Session::has('message'))
            <script type="text/javascript">
                $(function() {
                    var message = "<b>{{ Session::get("title") }}</b><br><p>{{ Session::get("message") }}</p>";
                    var type = "{{ Session::get('alert-type', 'default') }}"
                    new Toast({
                        message: message,
                        type: type
                    });
                })
            </script>
        @endif
    </body>
</html>
