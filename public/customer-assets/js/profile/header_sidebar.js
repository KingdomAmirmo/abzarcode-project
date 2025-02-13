const $ = document

let btnNotif = $.querySelector(".btn-notif")
let dropdownMenu = $.querySelector(".dropdown-container")
let toggleItem = $.querySelector(".toggle-item")

btnNotif.addEventListener("click", () => {
    toggleItem.classList.toggle("active");
})


// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.btn-notif') && !event.target.matches('.svg-notif')) {
        toggleItem.classList.remove("active");
    }
}

