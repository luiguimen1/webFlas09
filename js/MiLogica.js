$(document).ready(function () {
    $("#formulario").click(function () {
        f_ajax("View/Formu/ElFormulario.php", "a=1", function (datos) {
            $("#contenido").html(datos);
            validarFortabla();
        });
    });


    function validarFortabla() {
        $("#forCrTa").validate({
            rules: {
                limite: {
                    required: true,
                    number: true,
                    max: 2000,
                    min: 1
                },
                correo: {
                    email: true,
                    Minusculas: true
                },
                correo1: {
                    equalTo: "#correo"
                }
            },
            messages: {
                limite: {
                    number: "* NO se aterco es un numero"
                }
            },
            submitHandler: function () {
                var url = "CRTL/ForCrtb/CreaTabla.php";
                var parametros = $("#forCrTa").serialize();
                var metodo = function (datos) {
                    var edificio;
                    try {
                        edificio = JSON.parse(datos);
                    } catch (e) {
                        edificio = $.parseJSON(datos);
                    }
                    for (var i = 0; i < edificio.length; i++) {
                        var piso = edificio[i];
                        var cadena = '<tr>' +
                                '<td>' + piso.n1 + '</td>' +
                                '<td>*</td>' +
                                '<td>' + piso.n2 + '</td>' +
                                '<td>=</td>' +
                                '<th>' + piso.re + '</td>' +
                                '</tr>';
                        $("#listaResul").append(cadena);
                    }
                };

                f_ajax(url, parametros, metodo);

                /*var numero1 = parseInt(document.getElementById("numero").value);
                 var numero2 = $("#limite").val();
                 var edificio = new Array();
                 
                 for (var i = 1; i <= numero2; i++) {
                 var res = {
                 n1: numero1,
                 n2: i,
                 re: (numero1 * i)
                 };
                 edificio.push(res);
                 }
                 
                 for (var i = 0; i < edificio.length; i++) {
                 var piso = edificio[i];
                 var cadena = '<tr>' +
                 '<td>' + piso.n1 + '</td>' +
                 '<td>*</td>' +
                 '<td>' + piso.n2 + '</td>' +
                 '<td>=</td>' +
                 '<th>' + piso.re + '</td>' +
                 '</tr>';
                 $("#listaResul").append(cadena);
                 }
                 */
            }
        });
    }



    $("#estudiante").click(function () {
        var url = "View/Estudiante/LosEstudiantes.php";
        var parametros = "a=1";
        var quevoyhacer = function (datos) {
            $("#SuperContenido").html(datos);
        };
        f_ajax(url, parametros, quevoyhacer);
    });


    $("#mision").click(function () {
        var url = "Mision.php";
        var parametros = "a=1";
        var quevoyhacer = function (datos) {
            $("#contenido").html(datos);
        };
        f_ajax(url, parametros, quevoyhacer);
    });

    $("#vision").click(function () {
        f_ajax("vision.php", "a=1", function (datos) {
            $("#contenido").html(datos);
        });
    });
    $("#politica").click(function () {
        var url = "Politica.php";
        var parametros = "a=1";
        var quevoyhacer = function (datos) {
            $("#contenido").html(datos);
        };
        f_ajax(url, parametros, quevoyhacer);
    });


    $("#LisPer").click(function () {
        f_ajax("CRTL/Persona/ListaPersona.php", "a=1", function (datos) {
            // console.log(datos);
            var data = JSON.parse(datos);
            if (data.success == "OK") {
                $("#contenido").html('<table class="table table-hover">' +
                        ' <thead>' +
                        '  <tr>' +
                        '   <th scope="col">CC</th>' +
                        '  <th scope="col">NOmbre</th>' +
                        '  <th scope="col">Apellido</th>' +
                        '  <th scope="col">Correo</th>' +
                        '  <th scope="col">foto</th>' +
                        '  <th scope="col">Eliminar</th>' +
                        '  <th scope="col">Modificar</th>' +
                        ' </tr>' +
                        '</thead><tbody id="listaPersonas"></tbody></table>');
                for (var i = 0; i < data.row; i++) {
                    var persona = data[i];
                    var cadena = '<tr id="itemPer' + persona.id + '">' +
                            '   <td scope="col">' + persona.cc + '</td>' +
                            '  <td scope="col">' + persona.nombre + '</td>' +
                            '  <td scope="col">' + persona.apellido + '</td>' +
                            '  <td scope="col">' + persona.email + '</td>' +
                            '  <td scope="col"><img src="http://192.168.0.102/webflas09/img/' + persona.foto + '" style="width:30px;"/></td>' +
                            '  <td scope="col"><button type="none" class="btn btn-danger elimaPer" idPer ="' + persona.id + '">Eliminar</button></td>' +
                            '  <td scope="col"><button type="none" class="btn btn-info EditarPer" idPer ="' + persona.id + '">Editar</button></td>' +
                            ' </tr>';
                    $("#listaPersonas").append(cadena);
                }
                $(".elimaPer").click(function () {
                    var estado = confirm("Esta se seguro de eliminar a la Person????");
                    if (estado == true) {
                        var id = $(this).attr("idPer");
                        var url = "CRTL/persona/EliminarPer.php";
                        var paremtos = "IdcoD=" + id;
                        var metodo = function (datos) {
                            console.log(datos);
                            var data = JSON.parse(datos);
                            if (data.success == "OK") {
                                alert("La persona fue Eliminada");
                                $("#itemPer" + data.id).remove();
                            } else {
                                alert("La persona NO fue Eliminada");
                            }
                        };
                        f_ajax(url, paremtos, metodo);
                    }
                });


                $(".EditarPer").click(function () {
                    var id = $(this).attr("idPer");
                    f_ajax("View/Estudiante/ForRegEstu.php", "id=" + id, function (datos) {
                        $("#contenido").html(datos);

                        $("#forEstCap").validate({
                            rules: {
                                cc: {
                                    number: true,
                                    digits: true
                                },
                                Email: {
                                    email: true
                                },
                                fecha: {
                                    date: true
                                }
                            }, submitHandler: function () {
                                var url = "CRTL/persona/CrearPersona.php";
                                var parametros = $("#forEstCap").serialize();
                                var metodo = function (datos) {
                                    console.log(datos);
                                    var data = JSON.parse(datos);
                                    if (data.success == "OK") {
                                        alert("Los datos fueron registrados");
                                       // $("#forEstCap").reset();
                                    } else {
                                        alert("huusss! hay un problema");
                                    }

                                };
                                f_ajax(url, parametros, metodo);
                            }
                        });

                    })
                });

            } else {
                alert("NO hay personas a registrar");
            }
        });
    });

    $("#AgrPer").click(function () {
        f_ajax("View/Estudiante/ForRegEstu.php", "id=0", function (datos) {
            $("#contenido").html(datos);

            $("#forEstCap").validate({
                rules: {
                    cc: {
                        number: true,
                        digits: true
                    },
                    Email: {
                        email: true
                    },
                    fecha: {
                        date: true
                    }
                }, submitHandler: function () {
                    var url = "CRTL/persona/CrearPersona.php";
                    var parametros = $("#forEstCap").serialize();
                    var metodo = function (datos) {
                        console.log(datos);
                        var data = JSON.parse(datos);
                        if (data.success == "OK") {
                            alert("Los datos fueron registrados");
                            $("#forEstCap").reset();
                        } else {
                            alert("huusss! hay un problema");
                        }

                    };
                    f_ajax(url, parametros, metodo);
                }
            });


        });
    });


});