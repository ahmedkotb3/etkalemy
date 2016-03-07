// immediate function invocation
(function(){
    var open_list = $(".glyph");
    var close_list = $(".close-list");
    var list = $(".list");
    var list_icon_close = $(".close-list");

    open_list.click(function(){
       list.addClass("movetoRight_list");
        list_icon_close.addClass("movetoRight_list_icon");
    });

    close_list.click(function(){
        list.removeClass("movetoRight_list");
        list_icon_close.removeClass("movetoRight_list_icon");
    });

})();

