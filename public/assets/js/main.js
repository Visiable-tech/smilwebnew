/********** menu js************ */


$(window).scroll(function() {
    if ($(this).scrollTop() > 120) {
        $('#header').addClass('fixedheader');
    } else {
        $('#header').removeClass('fixedheader');
    }
});

const navbarMenu = document.getElementById("navbar");
const burgerMenu = document.getElementById("burger");
const overlayMenu = document.querySelector(".overlay");

// Show and Hide Navbar Function
const toggleMenu = () => {
    navbarMenu.classList.toggle("active");
    overlayMenu.classList.toggle("active");
};

// Collapsible Mobile Submenu Function
const collapseSubMenu = () => {
    navbarMenu
        .querySelector(".menu-dropdown.active .submenu")
        .removeAttribute("style");
    navbarMenu.querySelector(".menu-dropdown.active").classList.remove("active");
};

// Toggle Mobile Submenu Function
const toggleSubMenu = (e) => {
    if (e.target.hasAttribute("data-toggle") && window.innerWidth <= 1120) {
        e.preventDefault();
        const menuDropdown = e.target.parentElement;

        // If Dropdown is Expanded, then Collapse It
        if (menuDropdown.classList.contains("active")) {
            collapseSubMenu();
        } else {
            // Collapse Existing Expanded Dropdown
            if (navbarMenu.querySelector(".menu-dropdown.active")) {
                collapseSubMenu();
            }

            // Expanded the New Dropdown
            menuDropdown.classList.add("active");
            const subMenu = menuDropdown.querySelector(".submenu");
            subMenu.style.maxHeight = subMenu.scrollHeight + "px";
        }
    }
};

// Fixed Resize Window Function
const resizeWindow = () => {
    if (window.innerWidth > 1120) {
        if (navbarMenu.classList.contains("active")) {
            toggleMenu();
        }
        if (navbarMenu.querySelector(".menu-dropdown.active")) {
            collapseSubMenu();
        }
    }
};

// Initialize Event Listeners
burgerMenu.addEventListener("click", toggleMenu);
overlayMenu.addEventListener("click", toggleMenu);
navbarMenu.addEventListener("click", toggleSubMenu);
window.addEventListener("resize", resizeWindow);

//------------ Hero slider js----------------//

$(function() {
    // Owl Carousel
    var owl = $(".hero-slider");
    owl.owlCarousel({
        autoplay: false,
        items: 1,
        margin: 10,
        loop: true,
        nav: true,
        smartSpeed: 1000,
        dots: false,

        navText: ['<span class="fa-stack"><i class="bx bx-left-arrow-alt"></i></span>', '<span class="fa-stack"><i class="bx bx-right-arrow-alt"></i></span>'],
    });
});
//------------ home page slider ------------------//
$(function() {
    // Owl Carousel
    var owl = $(".facilities-carousel");
    owl.owlCarousel({
        items: 3,
        margin: 10,
        loop: true,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 2
            },

            1024: {
                items: 3
            },

            1366: {
                items: 3
            }
        }
    });
});

$(function() {
    // Owl Carousel
    var owl = $(".salient-features-slider");
    owl.owlCarousel({
        items: 4,
        margin: 10,
        loop: true,
        nav: false,
        autoplay: false,
        touchDrag: false,
        mouseDrag: false,
        responsive: {
            0: {
                items: 1,
                autoplay: true
            },

            600: {
                items: 2,
                autoplay: true
            },

            1024: {
                items: 3,
                autoplay: true
            },

            1366: {
                items: 4
            }
        }
    });
});
$(function() {
    // Owl Carousel
    var owl = $(".three-item-carousel ");
    owl.owlCarousel({
        items: 3,
        margin: 10,
        loop: true,
        nav: true,
        autoplay: true,
        touchDrag: false,
        mouseDrag: false,
        navText: ['<span class="fa-stack"><i class="bx bx-left-arrow-alt"></i></span>', '<span class="fa-stack"><i class="bx bx-right-arrow-alt"></i></span>'],
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 2
            },

            1024: {
                items: 3
            },

            1366: {
                items: 3
            }
        }
    });
});
//--------------- accordion --------------------//
const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));

//----------Scroll Top----------------//