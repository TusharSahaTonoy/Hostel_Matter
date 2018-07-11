$(document).ready(function()
{
    $("#main_content").load("home.html");
});

$('a').click(function()
{
    var page=$(this).attr('href');
    $("#main_content").load(page);
    return false;
});