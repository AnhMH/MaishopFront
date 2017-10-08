$('document').ready(function(){
    homePageMenuAction();
});

// Home page menu action
function homePageMenuAction() {
    var menu = $('.home_menu_text');
    var btnClose = $('.home_menu_close');
    menu.unbind('click').bind('click', function(){
        resetHomePageMenu();
        var image = $(this).data('image');
        $(this).addClass('active');
        $('#home_menu_image_' + image).fadeIn();
        btnClose.fadeIn();
    });
    btnClose.on('click', function(){
        resetHomePageMenu();
    });
}
function resetHomePageMenu() {
    $('.home_menu_text').removeClass('active');
    $('.home_menu_image, .home_menu_close').hide();
}


