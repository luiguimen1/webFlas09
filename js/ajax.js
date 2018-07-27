jQuery.fn.reset = function () {
    $(this).each(function () {
        this.reset();
    });
};

jQuery.validator.addMethod("Minusculas", function (value, element){
    return this.optional(element) || /^[a-záëúíóú.@ ]+$/i.test(value);
}, "Debe colocar de a - z");


function f_ajax(url,parametros,quevoyhacer) {
    $.ajax({
        url: url,
        data: parametros,
        type: 'POST',
        dataType: 'html',
        success: function (datos) {
            quevoyhacer(datos);
        },
        error: function () {
            alert('Disculpe, existió un problema');
        }
    });
}