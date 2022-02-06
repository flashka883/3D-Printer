$( document ).ready(function() {
    // Product-card section

    // Pictures preview
    $('.preview-img div a img').on('click', function() {
        $('.preview-img div a img').css('border','none');
        $(this).css('border','1px solid #000');
       $('.display-img img').attr('src', $(this).attr('src'));
    })

    // Heart icon toggle
    $('.heart-not-clicked').on('click', function() {
        if($('.heart-clicked').hasClass('hidden')) {
            $('.heart-clicked').removeClass('hidden');
            $('.heart-not-clicked').addClass('hidden');
        }
    })

    $('.heart-clicked').on('click', function() {
        if($('.heart-clicked').not('hidden')) {
            $('.heart-clicked').addClass('hidden');
            $('.heart-not-clicked').removeClass('hidden');
        }
    })

    // Info tabs
    $('.first-tab').on('click', function() {
        $('.first-tab').addClass('selected-info');
        $('.second-tab').removeClass('selected-info');
        $('.third-tab').removeClass('selected-info');

        $('.first-tab-info').removeClass('hidden');
        $('.secound-tab-info').addClass('hidden');
        $('.third-tab-info').addClass('hidden');
    })

    $('.second-tab').on('click', function() {
        $('.first-tab').removeClass('selected-info');
        $('.second-tab').addClass('selected-info');
        $('.third-tab').removeClass('selected-info');

        $('.first-tab-info').addClass('hidden');
        $('.secound-tab-info').removeClass('hidden');
        $('.third-tab-info').addClass('hidden');
    })

    $('.third-tab').on('click', function() {
        $('.first-tab').removeClass('selected-info');
        $('.second-tab').removeClass('selected-info');
        $('.third-tab').addClass('selected-info');

        $('.first-tab-info').addClass('hidden');
        $('.secound-tab-info').addClass('hidden');
        $('.third-tab-info').removeClass('hidden');
    })


    // Size selection
    let size;

    $('.custom-settings .size-settings .values a').on('click', function() {
        $('.custom-settings .size-settings .values a').removeClass('selected-size');
        size = $(this).html();
        $(this).addClass('selected-size');
    })

    let color;

    // Color selection
    $('.custom-settings .color-settings .colors div').on('click', function() {
        $('.custom-settings .color-settings .colors div').removeClass('selected');
        color = $(this).find('a').data('color');
        $(this).addClass('selected');
    })

    // popup 
    $('.popup-bg').hide();

    $('.add-card-btn').on('click', function() {
        $('.size-and-color-div').remove()
        $('.popup-bg').show(700);

        let html = `
        <div class="size-and-color-div">
            <p>Size:${size}</p>
            <p>Color:${color}</p> 
        </div> 
        `
        $('.popup').append(html);
    })

    $('.close').on('click', function() {
        $('.popup-bg').hide(700);
    })

    // Review section
    // let selectedRate;

    // // Stars selection
    // $('.review-stars i').click(function() {
    //     selectedRate = $(this).data('star');
    //     console.log(selectedRate);

    //     for(let i = 1; i <= selectedRate; i++) {
    //         $(`.review-stars i:nth-child(${i})`).addClass('active');
    //     }
    // })

    // // Add review 
    // $('.err-form-msg').hide();
    // $('.err-form-msg-mail').hide();
    // $('.add-review-btn').on('click', function() {
      
    //    let name = $('.name-input').val();
    //    let email = $('.mail-input').val();
    //    let msg = $('.msg-input').val();

    //    let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    //     if(name == '' || email == '' || msg == '') {
    //         $('.err-form-msg').fadeIn(600);
    //         setTimeout(function() { 
    //             $('.err-form-msg').fadeOut(600);
    //         }, 10000);
    //     } else if(emailReg.test(email) == true) {

    //     let starsString = '';
    //     for (let i = 1; i <= 5; i++) {
    //         if (i <= selectedRate) {
    //             starsString += '<i class="fas fa-star active"></i>';
    //         } else {
    //             starsString += '<i class="fas fa-star"></i>';
    //         }
    //     }


    //    let html = `
    //    <div class="review">
    //                 <h2>${name} <span><</span>${email}<span>></span></h2>
    //                 <div>
    //                     ${starsString}
    //                 </div>
    //                 <p>${msg}</p>
    //             </div>
    //    `;

    //     $('.review-list').prepend(html);

    //     $('.name-input').val('');
    //     $('.mail-input').val('');
    //     $('.msg-input').val('');

    // } else {
    //     $('.err-form-msg-mail').fadeIn(600);
    //         setTimeout(function() { 
    //             $('.err-form-msg-mail').fadeOut(600);
    //      }, 10000);
    // }

    // })

    
});
