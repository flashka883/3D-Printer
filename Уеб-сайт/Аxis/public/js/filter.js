let goBtn = $("#search-btn");
let keyWord = $("#blog-search");

goBtn.on('click', blogSearch);
keyWord.on( "keydown", function(event) {
    if(event.which == 13) 
        blogSearch();
  });

function blogSearch() {
    keyWord = $("#blog-search").val();

    let blogOne = $('.blog-one');
    let blogTwo = $('.blog-two');
    let blogThree = $('.blog-three');
    let blogFour = $('.blog-four');
    let blogFive = $('.blog-five');
    let blogSix = $('.blog-six');

    let titleOne = $("#title-one").text();
    let titleTwo = $("#title-two").text();
    let titleThree = $("#title-three").text();
    let titleFour = $("#title-four").text();
    let titleFive = $("#title-five").text();
    let titleSix = $("#title-six").text();

    if(keyWord == titleOne ) {
        // blogTwo.addClass('hidden');
        // blogThree.addClass('hidden');
        // blogFour.addClass('hidden');
        // blogFive.addClass('hidden');
        // blogSix.addClass('hidden');
        blogTwo.fadeOut('hidden');
        blogThree.fadeOut('hidden');
        blogFour.fadeOut('hidden');
        blogFive.fadeOut('hidden');
        blogSix.fadeOut('hidden');
    } else if(keyWord == titleTwo) {
        blogOne.fadeOut('hidden');
        blogThree.fadeOut('hidden');
        blogFour.fadeOut('hidden');
        blogFive.fadeOut('hidden');
        blogSix.fadeOut('hidden');
    } else if(keyWord == titleThree) {
        blogTwo.fadeOut('hidden');
        blogOne.fadeOut('hidden');
        blogFour.fadeOut('hidden');
        blogFive.fadeOut('hidden');
        blogSix.fadeOut('hidden');
    } else if(keyWord == titleFour) {
        blogTwo.fadeOut('hidden');
        blogThree.fadeOut('hidden');
        blogOne.fadeOut('hidden');
        blogFive.fadeOut('hidden');
        blogSix.fadeOut('hidden');
    } else if(keyWord == titleFive) {
        blogTwo.fadeOut('hidden');
        blogThree.fadeOut('hidden');
        blogFour.fadeOut('hidden');
        blogOne.fadeOut('hidden');
        blogSix.fadeOut('hidden');
    }  else if(keyWord == titleSix) {
        blogTwo.fadeOut('hidden');
        blogThree.fadeOut('hidden');
        blogFour.fadeOut('hidden');
        blogFive.fadeOut('hidden');
        blogOne.fadeOut('hidden');
    } else {
        blogOne.fadeOut('hidden');
        blogTwo.fadeOut('hidden');
        blogThree.fadeOut('hidden');
        blogFour.fadeOut('hidden');
        blogFive.fadeOut('hidden');
        blogSix.fadeOut('hidden');

        
        let blogErr = $('.blog-err-msg');
        blogErr.removeClass('hidden').fadeIn();
        
    }
}