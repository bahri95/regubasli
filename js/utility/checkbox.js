// jQuery object checkbox
jQuery.fn.extend({
    check: function(target) {
        $(this).click(function(){
            var status = $(this).attr("checked");
            $(target).attr({
                checked: status
            });
        });
    }
});