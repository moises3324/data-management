<div class="w3-row">
    <fieldset>
        <legend>Nuevo formulario</legend>
        <div class="w3-row">
            <div class="w3-col l4 w3-padding">
                <label class="w3-text-dark-gray"><b>Nombre formulario</b></label>
                <input id="formTitleInput" class="w3-input w3-border" type="text">
            </div>
            <div class="w3-col l8 w3-padding">
                <label class="w3-text-dark-gray"><b>Descripción</b></label>
                <input id="formDescriptionInput" class="w3-input w3-border" type="text">
            </div>
        </div>
        <div class="w3-row w3-padding-y">
            <div class="w3-col l4 w3-padding">
                <label class="w3-text-dark-gray"><b>Nombre campo</b></label>
                <input id="formFieldInput" class="w3-input w3-border" type="text">
            </div>
            <div class="w3-col l3 w3-padding">
                <label class="w3-text-dark-gray"><b>Tipo campo</b></label>
                <select id="formFieldSelect" name="formFieldSelect" class="w3-select w3-border">
                    <option value="text">Texto</option>
                    <option value="number">Número</option>
                    <option value="date">Fecha</option>
                    <option value="email">Correo electrónico</option>
                    <option value="password">Contraseña</option>
                </select>
            </div>
            <div class="w3-col l3 w3-padding">
                <label class="w3-text-dark-gray"><b>Ancho del campo</b></label>
                <select id="formFieldSizeSelect" name="formFieldSizeSelect" class="w3-select w3-border">
                    <option value="1">1 columna</option>
                    <option value="2">2 columnas</option>
                    <option value="3">3 columnas</option>
                    <option value="4">4 columnas</option>
                    <option value="5">5 columnas</option>
                    <option value="6">6 columnas</option>
                    <option value="7">7 columnas</option>
                    <option value="8">8 columnas</option>
                    <option value="9">9 columnas</option>
                    <option value="10">10 columnas</option>
                    <option value="11">11 columnas</option>
                    <option value="12">12 columnas</option>
                </select>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col l12 w3-padding">
                <button id="formFieldAddButton" class="w3-button w3-border w3-right">
                    Agregar columna
                </button>
            </div>
        </div>
    </fieldset>
</div>