// add active class on header menu items
function activateHome(){
    const homeItem = document.querySelectorAll('#menu-header li')[0];
    homeItem.classList.add("active");
}

function activateBlog(){
    const homeItem = document.querySelectorAll('#menu-header li')[1];
    homeItem.classList.add("active");
}

function activateRando(){
    const homeItem = document.querySelectorAll('#menu-header li')[2];
    homeItem.classList.add("active");
}