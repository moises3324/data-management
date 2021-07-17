const formList = document.querySelector("#formList")

function getAllForms() {
    $.get('../app/controllers/FormularioController.php', (response) => {
            const formElements = JSON.parse(response)
            formListTemplate(formElements)
        }
    );
}

function deleteForm(id, titulo) {
    if (confirm("¿Estas seguro que quieres eliminar el formulario " + titulo + "?")) {
        const postData = {
            action: "delete",
            id: id
        };
        $.post('../app/controllers/FormularioController.php', postData, (response) => {
            if (response !== 'Successful') {
                console.log(response)
            }
            getAllForms();
        });
    }
}

function btnDelete(e) {
    if (e.target.classList.contains("deleteIcon")) {
        const id = e.target.getAttribute("data-id")
        const title = e.target.parentElement.parentElement.firstElementChild.innerHTML
        deleteForm(id, title)
    }
}

function formListTemplate(formElements) {
    let template = '';
    formElements.forEach(form => {
        template += `
                  <tr>                  
                      <td class="w3-col l3">${form.title}</td>        
                      <td class="w3-col l5">${form.description}</td>        
                      <td class="w3-col l2 w3-center">${form.creationDate}</td>        
                      <td class="w3-col l1 w3-center"><a href="../views/completar-formulario.php?id=${form.id}">
                            <i class="mdi mdi-text-account w3-hover-text-green seeIcon"></i>
                        </a>                        
                      </td>          
                      <td class="w3-col l1 w3-center">
                        <i class="mdi mdi-delete w3-hover-text-red deleteIcon" data-id="${form.id}"></i>                        
                      </td>
                  </tr>
                `
    })
    formList.innerHTML = template

}