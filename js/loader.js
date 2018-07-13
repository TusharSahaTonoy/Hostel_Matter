$(document).ready(function(){
    $("#btn_home").click(function(){
        $("#form_content").load("home.html");
    });
    $("#btn_student").click(function(){
        $("#form_content").load("student.html");
    });
});