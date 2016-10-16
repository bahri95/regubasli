//--------------------------------- POPUP PLUG IN -----------------
//DRAGGABLE
$.fn.dragable=function(win){
    var drag=false,mouse,offset;
    if(win==null) win=$(this);
    $(this).mousedown(function(e){
        drag=true;
        offset=win.offset();
        mouse=e;
    }).mousemove(function(e){
        if (drag){
            var x=(e.pageX-mouse.pageX),y=(e.pageY-mouse.pageY);
            win.css("left", offset.left+x).css("top", offset.top+ y).css("right","auto");
        }
    }).mouseup(function(){
        drag=false;
        $(".popup").css("z-index",500);
        win.css("z-index",1000);
    }).mouseleave(function(){
        drag=false;
    });
}
//POPUP
function showWindow(option){
    var o=$.extend({
        url:null,
        title:'',
        data:null,
        id:1,
        content:null,
        left:null,
        top: 83,
        width:0,
        onSuccess:null,
        onClose:null
    },option);
    
    o.id="win-"+ o.id;
    //$("#"+o.id).remove();//Remove Old Window If exist
    var $win=$("#"+o.id);
    //Create Window
    if($win.length==0){
        var html='<div class="popup" id="'+o.id+'">';
        html +='    <div class="title"><div class="title-wrap">';
        html +='    <span class="title-txt"></span><span class="title-btn"></span>';
        html +='</div></div>';
        html +='<div class="body"></div>';
        html +='<div class="foot"><div><span></span></div></div></div>';
        $win=$(html).appendTo("body");
    }
    $win.find(".title-txt").html(o.title);
    var $body=$win.children(".body");
    $win.fadeIn();
    if(isEmpty(o.url)){
        $body.html(o.content);
        if($.isFunction(o.onSuccess)) o.onSuccess($body,o.content);
        $(".preloader").trigger('ajaxComplete');
    }else{
        $body.html("Loading Content....");
        $.ajax({
            url:o.url,
            type: "POST",
            data:o.data,
            timeout:15000,
            success:function(response){
                $body.html(response);
                if($.isFunction(o.onSuccess)) o.onSuccess($body,response);
            },
            error:function(){
                $win.children(".body").html("Page Not Found !");
            }
        })
    }
    //--Offset
    if(o.width>0)$win.width(o.width);
    var attr="left";
    if(o.left=='right'|| o.left=='left'){
        attr=o.left;
        o.left=($('body').width()-$(".mcontent").width())/2;
    }else if(isEmpty(o.left)){
        o.left=($("body").width()-$win.width())/2;
    }
    $win.css('left','').css('right','').css('top',o.top).css(attr,o.left);
    //--
    $win.children(".title").dragable($win);
    $win.find(".title-btn").click(function(){
        $win.hide();
        if($.isFunction(o.onClose))o.onClose();
    });
}
function isEmpty(val){
    return (val==null || val==undefined || val=="");
}