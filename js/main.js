"use strict";

// document.getElementById('nav').onmouseover = function (event) {
//     let target = event.target;
//
//     if (target.className == 'menu-item') {
//         let s = target.getElementsByClassName('submenu')
//         closeMenu();
//         s[0].style.display = 'flex';
//     }
// }
//
// document.onmouseover = function (event) {
//     let target = event.target;
//     console.log(event.target);
//     if (target.className != 'menu-item' && target.className != submenu) {
//         closeMenu();
//     }
// }
//
// function closeMenu() {
//     let menu = document.getElementById('nav');
//     let submenu = document.getElementsByClassName('submenu');
//     for (let i = 0; i < submenu.length; i++) {
//         submenu[i].style.display = 'none';
//     }
// }


let el = document.getElementsByClassName('menu-item');

for(var i=0; i<el.length; i++) {
    el[i].addEventListener("mouseenter", showSub, false);
    el[i].addEventListener("mouseleave", hideSub, false);
}

function showSub(e) {
    if(this.children.length>1) {
        this.children[1].style.height = "auto";
        this.children[1].style.overflow = "visible";
        this.children[1].style.opacity = "1";
    } else {
        return false;
    }
}

function hideSub(e) {
    if(this.children.length>1) {
        this.children[1].style.height = "0px";
        this.children[1].style.overflow = "hidden";
        this.children[1].style.opacity = "0";
    } else {
        return false;
    }
}


function addToCart(itemId) {
    console.log("js - addToCart()");

    $.ajax({
        type: 'POST',
        async: false,
        url: "",
        dataType: "json",
        success: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();

            }
        }

    });


}

