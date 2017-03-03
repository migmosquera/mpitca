$(document).on("ready", init);

var view;
var controller;
var model;

function init() {
    console.log("((Init))");

    model = new Model();
    controller = new Controller();
    view = new View();
}

function View() {
    console.log("((View))");

    $().UItoTop({easingType: 'easeOutQuart'});

    AOS.init({
        offset: 200,
        duration: 1000,
        delay: 300
    });
    $("#myCarousel").carousel({
        interval: 5000
    });

    $(".left").click(function () {
        $("#myCarousel").carousel("prev");
    });

    $(".right").click(function () {
        $("#myCarousel").carousel("next");
    });

    $(".item1").click(function () {
        $("#myCarousel").carousel(0);
    });

    $(".item2").click(function () {
        $("#myCarousel").carousel(1);
    });

    $(".item3").click(function () {
        $("#myCarousel").carousel(2);
    });

    $("#emailSendJormos").on('click', function () {
        if ($("#containerSendEmailJormos").hasClass('labelHide')) {
            $("#containerSendEmailJormos").removeClass('labelHide');
        } else {
            $("#containerSendEmailJormos").addClass('labelHide');
        }
    });
    $("#emailSendCharles").on('click', function () {
        if ($("#containerSendEmailCharles").hasClass('labelHide')) {
            $("#containerSendEmailCharles").removeClass('labelHide');
        } else {
            $("#containerSendEmailCharles").addClass('labelHide');
        }
    });
   
    $('.flexslider').flexslider({
        animation: "slide"
    });
   

}

function Controller() {
    console.log("((Controller))");



}

function Model() {
    console.log("((Model))");

    //..
}

