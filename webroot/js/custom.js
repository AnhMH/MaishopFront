$('document').ready(function(){
    homePageMenuAction();
    
    productDetail();
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

// Load product detail
function productDetail() {
    // Init
    var btn = $('.btn-view-more');
    var modal = $('#productDetailModal');
    var container = $('#productDetailModal .modal-content');
    var loader = $('#loader-wrapper');
    
    // Action
    btn.unbind('click').bind('click', function(){
        var $this = $(this);
        $.ajax({
            type: 'POST',
            url: BASE_URL + '/ajax/productdetail',
            data: {
                id : 12
            },
            beforeSend: function() {
                $this.button('loading');
            },
            success: function (response) {
                container.html(response);
                modal.modal('show');
            },
            complete: function () {
                $this.button('reset');
            }
        });
    });
}

