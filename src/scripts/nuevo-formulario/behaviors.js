const formTitleInput = document.querySelector("#formTitleInput")
const formDescriptionInput = document.querySelector("#formDescriptionInput")
const formFieldInput = document.querySelector("#formFieldInput")
const formFieldSelect = document.querySelector("#formFieldSelect")
const formFieldAddButton = document.querySelector("#formFieldAddButton")
const formFieldSizeSelect = document.querySelector("#formFieldSizeSelect")
const formGenerateButton = document.querySelector("#formGenerateButton")
const formTitleText = document.querySelector("#formTitleText")
const formBody = document.querySelector("#formBody")

formTitleInput.addEventListener("keyup", (e) => {
    formTitleText.innerHTML = e.target.value
})

formFieldAddButton.addEventListener("click", () => {
    addFieldFunction()
    formFieldInput.value = ""
    formFieldSelect.selectedIndex = 0
    formFieldSizeSelect.selectedIndex = 0
})

formGenerateButton.addEventListener("click", () => {
    generateForm()
})

formBody.addEventListener("mouseover", (e)=>{
    showCloseIcon(e)
})