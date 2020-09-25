// add active class to header menu items
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

// add active class to category menu items
function activateJura(){
    const homeItem = document.querySelectorAll('#menu-category li')[0];
    homeItem.classList.add("active");
}

function activateFrance(){
    const homeItem = document.querySelectorAll('#menu-category li')[1];
    homeItem.classList.add("active");
}

function activateEtranger(){
    const homeItem = document.querySelectorAll('#menu-category li')[2];
    homeItem.classList.add("active");
}