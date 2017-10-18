/**
 * Created by fingertap on 2017/9/16.
 */
var path = window.document.location.href;
var pathName=window.document.location.pathname;
function getContextPath() {
    //获取主机地址，如： http://localhost:8083
    var localhostPaht=path.substring(0,getContextPosition);
    return localhostPaht;
}
function getContextPosition() {
    return pathName.replace("/","");
}

function getFirstMenu(ename) {
    var menu = '';
    $.ajax({
        type : "get",
        url : "base/firstMenu.php?ename="+ename,
        async : false,
        success : function(result){
            menu = result;
        }
    });
    console.log(menu);
    return JSON.parse(menu);
}
function getMenuByEname(ename) {
    var menu = '';
    $.ajax({
        type : "get",
        url : "base/menu.php?ename="+ename,
        async : false,
        success : function(result){
            menu = result;
        }
    });
    return JSON.parse(menu);
}

function getTextByMenuEname(ename) {
    var content = '';
    $.ajax({
        type : "get",
        url : "base/text.php?ename="+ename,
        async : false,
        success : function(result){
            content = result;
        }
    });
    return JSON.parse(content);
}
function getImageByEname(ename) {
    var imageUri='';
    $.ajax({
        type : "get",
        url : "base/image.php?ename="+ename,
        async : false,
        success : function(result){
            imageUri = result;
        }
    });
    return JSON.parse(imageUri);
}
function getCommonByEname(ename) {
    var common = '';
    $.ajax({
        type : "get",
        url : "base/common.php?ename="+ename,
        async : false,
        success : function(result){
            common = result;
        }
    });
    return common;
}