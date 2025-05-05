
            //function para hacer doble  seleccion en un mismo select 

            function AsignarTipoCertificacion() {
                $('#IdTipoCertificacion').val($('#ddlTipoCertificacion').val());
                $('#TipoCertificacion').val($('#ddlTipoCertificacion option:selected').text());
            }

            function AsignarLugarExpedicion() {
                $('#idEntidadFederativa').val($('#ddlLugarExpedicion').val());
                $('#entidadFederativa').val($('#ddlLugarExpedicion option:selected').text());}