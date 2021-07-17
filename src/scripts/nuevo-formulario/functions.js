function addFieldFunction() {
    let cuerpoCampo = `<div class="w3-col l${formFieldSizeSelect.value} w3-padding w3-display-container">
                           <label class="w3-text-dark-gray"><b>${formFieldInput.value}</b><i class="mdi mdi-close-circle-outline w3-display-topright w3-hide"></i></label>
                           <input id="${formFieldInput.value}" class="w3-input w3-border" type="${formFieldSelect.value}">
                       </div>`
    formBody.lastElementChild.insertAdjacentHTML("beforeend", cuerpoCampo)
}

function generateForm() {
    let formContent = document.querySelector("#formBodyPreview")
    return $(document).ready(function () {
        const postData = {
            action: "create",
            title: formTitleInput.value,
            description: formDescriptionInput.value,
            structure: formContent.innerHTML,
        };
        $.post('../app/controllers/FormularioController.php', postData, (response) => {
            if (response === 'Successful') {
                location.assign('../views/formularios.php')
            } else {
                console.log(response)
            }
        });
    });
}

function showCloseIcon(e) {
    /*const id = e.target.getAttribute("data-id")
    const title = e.target.parentElement.parentElement.firstElementChild.innerHTML*/
    console.log(e.target.firstElementChild.lastElementChild)
}