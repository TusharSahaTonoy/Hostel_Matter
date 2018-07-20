
$(document).ready(function () {
    $("#change").load("home.html");

    /*Side navigation bar*/
    $("#btn_home").click(
        function () {
            $("#change").load("home.html");
        }
    );
    $("#btn_student").click(
        function () {
            $("#change").load("student.html");
        }
    );
    $("#btn_building").click(
        function () {
            $("#change").load("building.html");
        }
    );
    $("#btn_stuff").click(
        function () {
            $("#change").load("stuff.html");
        }
    );
    $("#btn_room").click(
        function () {
            $("#change").load("room.html");
        }
    );
});