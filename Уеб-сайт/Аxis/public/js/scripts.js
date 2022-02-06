function headerActiveSection() {
    $("header .row:last-child a").click(function(){
        $(this).parent().find('a').removeClass('active');
        $(this).addClass('active');
    });
}

function selectProductImage() {
    $(".product .product-gallery img").click(function(){
        $(this).parent().parent().parent().find('.item').removeClass('focused');
        $(this).parent().addClass('focused');
        let image = $(this).attr('src');
        $('.product .image-holder img').attr('src', image);
    });
}

function likeProduct() {
    $(".product .right-col .like").click(function(){
        // $(this).toggleClass('active');
        if ($(this).find('i').hasClass('far')) {
            $(this).find('i').removeClass('far').addClass('fas');
        } else {
            $(this).find('i').removeClass('fas').addClass('far');
        }
    });
}

function switchTabs() {
    $(".product .tab h2").click(function(){
        $('.product .tab').removeClass('active');
        $(this).parent().addClass('active');
        let content = $(this).parent().find('.text').text();
        $('.product .tabs-holder .content').text(content);
    });
}

function chooseProductSize() {
    $(".product .size-container .left-col .last-row .size").click(function(){
        $(this).parent().find('.size').removeClass('active');
        $(this).addClass('active');
    });
}

function chooseProductColor() {
    $(".product .size-container .right-col .last-row .color-box").click(function(){
        $(this).parent().find('.color-box').removeClass('active');
        $(this).addClass('active');
    });
}

// function addToCart() {
//     $(".product .buy-container .add-to-card-btn").click(function(){
//         $('.cart-popup').addClass('active');
//         let productImg = $('.product .left-col .image-holder img').attr("src");
//         let product = $('.product .right-col .title').text();
//         let size = $('.product .size-container .size.active h4').text();
//         let color = $('.product .size-container .color-box.active .color').attr('class').split(' ')[1];
//         let cost = $('.product .buy-container .price').text();
        
//         $('.cart-popup .product').attr("src", productImg);
//         $('.cart-popup .title').text('Product: ' + product);
//         $('.cart-popup .size').text(size);
//         $('.cart-popup .color').text(color);
//         $('.cart-popup .cost').text('Total Cost: ' + cost);
//     });
// }

function closeCartPopup() {
    $(".cart-popup").click(function(){
        $('.cart-popup').removeClass('active');
    });
}

function addReview() {
    $(".review .add-review").click(function(){
        let rating = $('input[name="crating"]:checked').val()
        let name = $('#name').val();
        let mail = $('#email').val();
        let message = $('#message').val();

        $('form').find('.review-input').val('');
        $('form').find('input[name="crating"]:checked').prop( "checked", false );

        let html = 
            '<div class="single-review">' +
                '<h2 class="from">' + name + ' <span>&lt;</span>'  + mail + '<span>&gt;</span></h2>' +
                '<div class="rating">' +
                    '<i class="fas fa-star"></i>'.repeat(rating) +
                '</div>' +
                '<p class="message">' + message + '</p>' +
            '</div>';

        $(html).insertAfter('.insert-review-after-me');
    });
}

// Login

function openLoginRegisterPopup() {
    $(".login-popup-btn").click(function(){
        $('.login-register').addClass('active');
    });
}

function switchLoginRegistarContent() {
    $(".login-register .login-content-btn").click(function(e){
        e.preventDefault();

        $('.login-register .content').removeClass('active');
        $('.login-register .login').addClass('active');
    });

    $(".login-register .register-content-btn").click(function(e){
        e.preventDefault();
        
        $('.login-register .content').removeClass('active');
        $('.login-register .register').addClass('active');
    });
}

function closeLoginRegisterPopup() {
    $('.login-register').mouseup(function(e)     {
        var container = $(".login-register .inner");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.login-register').removeClass('active');
        }
    });
}

function activeSection(section) {
    let url = window.location.href;
    if (url.includes(section)) {
        $('.section').removeClass('active');
        $('.' + section).addClass('active');
    }
}

function insertInCart(product) {
    console.log(product);
    let html = 
    `<div class="item" data-id="${product.id}">
        <div class="product-image-holder">
            <img class="product-image" src="${product.attributes.image}" alt="">
        </div>
        <div class="product-information">
            <div class="row">
                <h2 class="title">${product.name}</h2>
            </div>
            <div class="row">
                <div class="size-holder">
                    <h3>Size: </h3>
                    <div class="Size">

                    </div>
                </div>
                <div class="color-holder">
                    <h3>Color: </h3>
                    <div class="color">

                    </div>
                </div>
            </div>
            <div class="row">
                <h3 class="price">Price: $${product.price}</h3>
            </div>
        </div>
        <div class="quantity" data-quantity="${product.quantity}">
            <a class="increase circle" href="#"><i class="fas fa-plus"></i></a>
            <div class="number-holder">
                <h4 class="number">${product.quantity}</h4>
            </div>
            <a class="decrease circle" href="#"><i class="fas fa-minus"></i></a>
        </div>
    </div>`;

    $(html).insertBefore('.insert-before-me');
}

function setDefaultProductImageSize() {
    var cw = $('.product-image').width();
    $('.cart .items-holder').attr("data-default-width", cw);
}

function heightSameAsWidth() {
    // var cw = $('.product-image').width();
    // $('.product-image').css({'height':cw+'px'}).css({'width':'unset'});
    // var cw = $('.product-image').width();
    var cw = $('.cart .items-holder').data("default-width");
    
    $('.product-image').each(function( item ) {
        $(this).css({'height':cw+'px'});
    });
    $('.product-image').each(function( item ) {
        $(this).css({'width':'unset'});
    });
}

function loadCartContent() {
    let url = window.location.origin + '/cart';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "GET",
        url: url,
        success: function (response) {
            if (response.status == 'success') {
                Object.keys(response.cartItems).forEach(function(product){
                    insertInCart(response.cartItems[product]);
                });
                
                heightSameAsWidth();
            }

            // response.message
            // todo create a popup messege for success
        },
        error: function(response) {
            console.log(response);
        }
    });
}

$( document ).ready(function() {
    // Owl Carousel
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:80,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            300:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

    activeSection("home")
    activeSection("shop")
    activeSection("blog")
    activeSection("contact")

    loadCartContent();

    // Popups
        // Login
    openLoginRegisterPopup();
    switchLoginRegistarContent();
    closeLoginRegisterPopup();

    // Product
    headerActiveSection();
    selectProductImage();
    likeProduct();
    switchTabs();
    chooseProductSize();
    chooseProductColor();
    // addToCart();
    // closeCartPopup();
    // addReview();
});

// hide and show user icon 

let uIcon = $('.user-icon')
let pMenu = $('.profile-menu')
pMenu.addClass('hidden');

uIcon.on('click', () => {
    pMenu.toggle('hidden')
})

// show cart

let addToCartBtn = $('.add-to-card-btn')
let sideCart = $('.cart')

addToCartBtn.on('click', () => {
    sideCart.addClass('active')
})  


// hide open mobile menu

let mobBtn = $('.header-popup-btn');
let mobContent = $('.menu-content');

mobContent.addClass('hidden');
mobBtn.on('click', () => {
    mobContent.toggle('hidden')
})