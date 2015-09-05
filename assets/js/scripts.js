/* 
 *  CODED BY MAHDI HAZAVEH
 *  <mahdi@hazaveh.net>
 */


$(function(){
    $("#form").submit(function(){
        $("#code").val(editor.getValue());
    })
    
    $("#compile").click(function(){
        $("form#form").submit();
    })
})