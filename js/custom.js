$(".main-banner-slider").slick({
    dots: false,
    prevArrow: false,
    nextArrow: false,
    autoplay: true,
    autplaySpeed: 2000,
});

$(".mpos-slider").slick({
    dots: false,
    prevArrow: "<i class='fas fa-long-arrow-alt-right'></i>",
    nextArrow: "<i class='fas fa-long-arrow-alt-left'></i>",
    autoplay: true,
    autplaySpeed: 5000,
});

function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

// const selector = document.querySelector(".custom-select");

// selector.addEventListener("change", (e) => {
//     console.log("changed", e.target.value);
// });

// selector.addEventListener("mousedown", (e) => {
//     if (window.innerWidth >= 420) {
//         // override look for non mobile
//         e.preventDefault();

//         const select = selector.children[0];
//         const dropDown = document.createElement("ul");
//         dropDown.className = "selector-options";

//         [...select.children].forEach((option) => {
//             const dropDownOption = document.createElement("li");
//             dropDownOption.textContent = option.textContent;

//             dropDownOption.addEventListener("mousedown", (e) => {
//                 e.stopPropagation();
//                 select.value = option.value;
//                 selector.value = option.value;
//                 select.dispatchEvent(new Event("change"));
//                 selector.dispatchEvent(new Event("change"));
//                 dropDown.remove();
//             });

//             dropDown.appendChild(dropDownOption);
//         });

//         selector.appendChild(dropDown);

//         // handle click out
//         document.addEventListener("click", (e) => {
//             if (!selector.contains(e.target)) {
//                 dropDown.remove();
//             }
//         });
//     }
// });

// change product's image dynamically in main-product.php

$(".co-wear-input").click(function() {
    // console.log(mysrc);
    var mysrc = $(this).attr("src");
    $(".myImage").attr("src", mysrc);
    $(".my-lighbox-class").attr("href", mysrc);
});

$(".check__reviews").click(function() {
    $("#mySidenav").addClass("open");
    $("body").addClass("open-opacity");
});

$(".closebtn").click(function() {
    $("#mySidenav").removeClass("open");
    $("body").removeClass("open-opacity");
});

const $menu = $("#mySidenav");
$(document).mouseup((e) => {
    if (!$menu.is(e.target) && // if the target of the click isn't the container...
        $menu.has(e.target).length === 0
    ) {
        // ... nor a descendant of the container
        $menu.removeClass("open");
        $("body").removeClass("open-opacity");
    }
});

$(".co-wear-input").click(function() {
    $(".co-wear-input").removeClass("selected");
    $(this).addClass("selected");
});

$(".search_id").click(function() {
    $("#myDIV").toggle(300);
});

// end of change product's image dynamically in main-product.php

// sidebar navigation
function openNav() {
    // document.getElementById("mySidenav").style.width = "30%";
    $("#mySidenav").css("width", "30%");
}

function closeNav() {
    // document.getElementById("mySidenav").style.width = "0";
    $("#mySidenav").css("width", "0");
}

$("#read_more_btn").click(function() {
    $(".read-more").slideToggle("slow");
});

/**
 * border_class appiled to the selected size.
 * eg: XL highlighted, SM, XXL .. unhighlighted.
 */
$(".size li").click(function(e) {
    $(this).addClass("border_class").siblings().removeClass("border_class");
});