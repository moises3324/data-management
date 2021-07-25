function addFieldFunction(containerNumber) {
    let cuerpoCampo = `<div class="w3-col l${formFieldSizeSelect.value} w3-padding w3-display-container" id="con${containerNumber}">
                           <label class="w3-text-dark-gray"><b>${formFieldInput.value}</b>
                               <i class="mdi mdi-close-circle-outline w3-display-topright w3-text-red"></i>
                           </label>
                           <input id="${formFieldInput.value}" class="w3-input w3-border" type="${formFieldSelect.value}">
                       </div>`
    formBody.lastElementChild.insertAdjacentHTML("beforeend", cuerpoCampo)
}

function generateForm() {
    let formContent = document.querySelector("#formBodyPreview")
    const postData = {
        action: "create",
        title: formTitleInput.value,
        description: formDescriptionInput.value,
        structure: formContent.innerHTML.trim(),
    };
    $.post('../app/controllers/FormularioController.php', postData, (response) => {
        if (response === 'Successful') {
            location.assign('../views/formularios.php')
        } else {
            console.log(response)
        }
    });
}

function removeElement(e) {
    if (e.target.classList.contains("mdi-close-circle-outline")) {
        const id = e.target.parentElement.parentElement.getAttribute("id")
        const element = document.getElementById(id)
        formBody.firstElementChild.removeChild(element)
    }
}

let columnList = {}
function columnsArray(key, value){

}