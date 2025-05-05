function AsignarEntidadFederativa() {
    $('#IdEntidadFederativa').val($('#ddlEntidades').val());
    $('#EntidadFederativa').val($('#ddlEntidades option:selected').text());
}