function getForm(id) {
    const postData = {
        action: "getOne",
        id: id
    };
    $.post('../app/controllers/FormularioController.php', postData, (response) => {
        const form = JSON.parse(response);
        const formTemplate = document.querySelector("#formTemplate")
        formTemplate.innerHTML = form.structure
        formTemplate.append()
    });
}