<div class="form-group">
	<label for="prop_cedula_catastral_ra">Cédula catastral *</label>

	<input class="form-control" required="true" name="prop_cedula_catastral_ra" id="prop_cedula_catastral_ra" value="<?php
    if (houzez_edit_property()) {
        houzez_field_meta('property_cedula_catastral_ra');
    }
    ?>" placeholder="Ingrese la cédula catastral del inmueble" type="text">
</div>