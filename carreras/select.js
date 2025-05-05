function AsignarTipoPeriodo() {
    $('#IdTipoPeriodo').val($('#ddlTipoPeriodo').val());
    $('#TipoPeriodo').val($('#ddlTipoPeriodo option:selected').text());
}

function AsignarNivel() {
    $('#IdNivel').val($('#ddlNivel').val());
    $('#Nivel').val($('#ddlNivel option:selected').text());
}

function AsignarAutorizacion() {
    $('#idAutorizacionReconocimiento').val($('#ddlAutorizacion').val());
    $('#autorizacionReconocimiento').val($('#ddlAutorizacion option:selected').text());
}
