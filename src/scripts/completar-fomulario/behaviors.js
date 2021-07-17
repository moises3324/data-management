let url = window.location.href   //Get the url of the actual page
let getUrlId = url.lastIndexOf("=") + 1   //Search the location of the "=" sign
let formId = url.substring(getUrlId)   //Get the id of the form selected previously

window.addEventListener("load", () => {
    getForm(formId)
})