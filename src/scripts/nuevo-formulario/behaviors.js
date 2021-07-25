const formTitleInput = document.querySelector("#formTitleInput")
const formDescriptionInput = document.querySelector("#formDescriptionInput")
const formFieldInput = document.querySelector("#formFieldInput")
const formFieldSelect = document.querySelector("#formFieldSelect")
const formFieldAddButton = document.querySelector("#formFieldAddButton")
const formFieldSizeSelect = document.querySelector("#formFieldSizeSelect")
const formGenerateButton = document.querySelector("#formGenerateButton")
const formTitleText = document.querySelector("#formTitleText")
const formBody = document.querySelector("#formBody")

let containerNumber = 0

formTitleInput.addEventListener("keyup", (e) => {
    formTitleText.innerHTML = e.target.value
})

formFieldAddButton.addEventListener("click", () => {
    containerNumber = containerNumber + 1
    addFieldFunction(containerNumber)
    formFieldInput.value = ""
    formFieldSelect.selectedIndex = 0
    formFieldSizeSelect.selectedIndex = 0
})

formGenerateButton.addEventListener("click", () => {
    generateForm()
})

formBody.addEventListener("click", (e) => {
    removeElement(e)
})
