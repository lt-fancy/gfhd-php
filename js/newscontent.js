
//????��֮���e??�U

function fontZoom(size)
{
    document.getElementById('con').style.fontSize=size+'px';
}


//��??�z??�s�g��
(function($){
    $.fn.contentPages = function(newsid){

        $("div#contentpages").empty();

        $.ajax({
            type: "POST",
            url:PDV_RP+"news/post.php",
            data: "act=contentpages&newsid="+newsid,
            success: function(msg){
                $("div#contentpages").append("<ul>");
                $("div#contentpages").append("<li id='pl' class='cbutton'>�??��?</li>");
                $("div#contentpages").append(msg);
                $("div#contentpages").append("<li id='pn' class='pbutton'>���?��?</li>");
                $("div#contentpages").append("</ul>");
                //$("li#pl").hide();


                var getObj = $('li.pages');

                if(getObj.length<2){
                    $("div#contentpages").hide();
                    $().setBg();
                    return false;
                }

                $('li.pages')[0].className='pagesnow';

                getObj.each(function(id) {

                    var obj = this.id;

                    $("li#"+obj).click(function() {

                        $('li.pagesnow')[0].className="pages";
                        this.className='pagesnow';
                        var clickid=obj.substr(2);
                        $().getContent(newsid,clickid);
                        if($(".pagesnow").next()[0].id=="pn"){$("li#pn")[0].className="cbutton";}else{$("li#pn")[0].className="pbutton";}
                        if($(".pagesnow").prev()[0].id=="pl"){$("li#pl")[0].className="cbutton";}else{$("li#pl")[0].className="pbutton";}


                    });

                });


                //�??��?
                $("li#pl").click(function() {
                    if($("li#pl")[0].className=="pbutton"){
                        var nowObj=$(".pagesnow").prev()[0].id;
                        var nextpageid=nowObj.substr(2);
                        $().getContent(newsid,nextpageid);
                        $('li.pagesnow')[0].className="pages";
                        $("#"+nowObj)[0].className="pagesnow";
                        if($(".pagesnow").prev()[0].id=="pl"){$("li#pl")[0].className="cbutton";}else{$("li#pl")[0].className="pbutton";}
                        if($(".pagesnow").next()[0].id=="pn"){$("li#pn")[0].className="cbutton";}else{$("li#pn")[0].className="pbutton";}

                    }else{
                        return false;
                    }


                });


                //���?��?
                $("li#pn").click(function() {
                    if($("li#pn")[0].className=="pbutton"){
                        var nowObj=$(".pagesnow").next()[0].id;
                        var nextpageid=nowObj.substr(2);
                        $().getContent(newsid,nextpageid);
                        $('li.pagesnow')[0].className="pages";
                        $("#"+nowObj)[0].className="pagesnow";
                        if($(".pagesnow").prev()[0].id=="pl"){$("li#pl")[0].className="cbutton";}else{$("li#pl")[0].className="pbutton";}
                        if($(".pagesnow").next()[0].id=="pn"){$("li#pn")[0].className="cbutton";}else{$("li#pn")[0].className="pbutton";}

                    }else{
                        return false;
                    }
                });

            }
        });
    };
})(jQuery);


//��??�z�b???��?

(function($){
    $.fn.getContent = function(newsid,newspageid){

        $.ajax({
            type: "POST",
            url:PDV_RP+"news/post.php",
            data: "act=getcontent&newspageid="+newspageid+"&newsid="+newsid+"&RP="+PDV_RP,
            success: function(msg){
                $("#con").html(msg);
                $("#con").find("img").each(function(){
                    if(this.offsetWidth>600){
                        this.style.width="600px";
                    }
                });
                $().setBg();
            }
        });
    };
})(jQuery);


//���???????����ԉ???
$(window).load(function(){
    $("#con").find("img").hide();
    var w=$("#con")[0].offsetWidth;
    $("#con").find("img").each(function(){
        $(this).show();
        if(this.offsetWidth>w){
            this.style.width=w + "px";
            $().setBg();
        }
    });

});


//??????����??�{��
$(document).ready(function(){

    $("span#zhichi").click(function(){

        var newsid=$("input#newsid")[0].value;

        $.ajax({
            type: "POST",
            url:PDV_RP+"news/post.php",
            data: "act=zhichi&newsid="+newsid,
            success: function(msg){
                if(msg=="L0"){
                    $().popLogin(0);
                }else if(msg=="L1"){
                    $().alertwindow("����?̲�z���]?��Ъ�b??�k??���?","");
                }else{
                    $("span#zhichinum").html(msg);
                }
            }
        });
    });


    $("span#fandui").click(function(){

        var newsid=$("input#newsid")[0].value;

        $.ajax({
            type: "POST",
            url:PDV_RP+"news/post.php",
            data: "act=fandui&newsid="+newsid,
            success: function(msg){
                if(msg=="L0"){
                    $().popLogin(0);
                }else if(msg=="L1"){
                    $().alertwindow("����?̲�z���]?��Ъ�b??�k??���?","");
                }else{
                    $("span#fanduinum").html(msg);
                }
            }
        });
    });

});


//??��?��????
$(document).ready(function(){

    $("div#addfav").click(function(){

        var newsid=$("input#newsid")[0].value;

        $.ajax({
            type: "POST",
            url:PDV_RP+"news/post.php",
            data: "act=addfav&newsid="+newsid+"&url="+window.location.href,
            success: function(msg){
                if(msg=="L0"){
                    $().popLogin(0);
                }else if(msg=="L1"){
                    $().alertwindow("?��Ъ�b????�G?����?��?�\?","");
                }else if(msg=="OK"){
                    $().alertwindow("��Ñ?�e?��?��?????�e��",PDV_RP+"member/member_fav.php");
                }else{
                    alert(msg);
                }
            }
        });
    });

});


//??�J��?��΁?�r??
$(document).ready(function(){
    var downcentstr=$("input#downcent")[0].value;
    if(downcentstr!=""){
        $("#downcentnotice").html("(㖱�΁????�J�@?�?"+downcentstr+")");
    }
    $("#downlink").click(function(){
        var newsid=$("input#newsid")[0].value;

        $.ajax({
            type: "POST",
            url:PDV_RP+"news/post.php",
            data: "act=download&newsid="+newsid+"&RP="+PDV_RP,
            success: function(msg){
                if(msg=="1000"){
                    alert("㖱�΁????�J��??�ܔ�?");
                }else if(msg=="1001"){
                    alert("㖱�΁????�J�@?�?"+downcentstr);
                }else{
                    window.location=msg;
                }
            }
        });

    });
});


//???���n��?
$(document).ready(function(){

    var newsid=$("input#newsid")[0].value;

    $.ajax({
        type: "POST",
        url:PDV_RP+"news/post.php",
        data: "act=ifbanzhu&newsid="+newsid,
        success: function(msg){
            if(msg=="YES"){
                $("#banzhu").append("???���n��? | <span id='banzhutj'>?�Q???</span> | <span id='banzhudel'>???�f</span> | <span id='banzhudelmincent'>???�f�׆ܾr??</span> |").show();
                $().setBg();

                //?�Q??�?��??
                $("#banzhutj").click(function(){
                    $.ajax({
                        type: "POST",
                        url:PDV_RP+"news/post.php",
                        data: "act=banzhutj&newsid="+newsid,
                        success: function(msg){
                            if(msg=="OK"){
                                $().alertwindow("?�Q??�????","");
                            }else{
                                alert(msg);
                            }
                        }
                    });

                });

                //???�f??��??
                $("#banzhudel").click(function(){
                    $.ajax({
                        type: "POST",
                        url:PDV_RP+"news/post.php",
                        data: "act=banzhudel&newsid="+newsid,
                        success: function(msg){
                            if(msg=="OK"){
                                $().alertwindow("???�f?????","../class/");
                            }else{
                                alert(msg);
                            }
                        }
                    });

                });


                //???�f�׆ܾr????��??
                $("#banzhudelmincent").click(function(){
                    $.ajax({
                        type: "POST",
                        url:PDV_RP+"news/post.php",
                        data: "act=banzhudel&koufen=yes&newsid="+newsid,
                        success: function(msg){
                            if(msg=="OK"){
                                $().alertwindow("???�f�׆ܾr???????","../class/");
                            }else{
                                alert(msg);
                            }
                        }
                    });

                });

            }else{
                $("#banzhu").empty().hide();
            }
        }
    });

});

