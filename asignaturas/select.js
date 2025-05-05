function AsignarTipoAsignatura() {
    $('#IdTipoAsignatura').val($('#dllTipoAsignatura').val());
    $('#TipoAsignatura').val($('#dllTipoAsignatura option:selected').text());
}

