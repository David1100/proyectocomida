
        // Si se hace click sobre el input de tipo checkbox con id checkb
        $('#1').click(function() {
            // Si esta seleccionado (si la propiedad checked es igual a true)
            if ($(this).prop('checked')) {
                // Selecciona cada input que tenga la clase .checar
                $('.checkbox-inline').prop('checked', true);
            } else {
                // Deselecciona cada input que tenga la clase .checar
                $('.checkbox-inline').prop('checked', false);
            }
        });
  