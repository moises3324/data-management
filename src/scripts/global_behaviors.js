const sidebar = document.querySelector("#mySidebar")
const btnCloseMenu = document.querySelector("#btnCloseMenu")
const btnOpenMenu = document.querySelector("#btnOpenMenu")
btnOpenMenu.addEventListener("click", ()=>{
    sidebar.setAttribute("style", "display: block")
})
btnCloseMenu.addEventListener("click", ()=>{
    sidebar.setAttribute("style", "display: none")
})