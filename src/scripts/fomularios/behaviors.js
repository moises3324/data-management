const btnReload = document.querySelector("#btnReload")
let itemsList = document.querySelector("#formList")

window.addEventListener("load", () => {
    getAllForms()
})

itemsList.addEventListener("click", (e) => {
    btnDelete(e)
})

btnReload.addEventListener("click", () => {
    getAllForms()
})