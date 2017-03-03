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
    $("#sercompreca").on('click',function(){
        $("#textSercompreca").removeClass('labelHide');
        $("#textSercompreca").addClass('text_proyect_sub');
        $("#textPolociaMunicipal").addClass('labelHide');
    })
    $("#policiaMunicipal").on('click',function(){
        $("#textPolociaMunicipal").removeClass('labelHide');
        $("#textSercompreca").addClass('labelHide');
        $("#textPolociaMunicipal").addClass('text_proyect_sub');
    })
    $("#puertoCruz").on('click',function(){
        $("#textPuertoCruz").removeClass('labelHide');
        $("#textNutrition").addClass('labelHide');
        $("#textCabimas").addClass('labelHide');
        $("#textHotelDinastia").addClass('labelHide');
        $("#textPuertoCruz").addClass('text_proyect_sub');
    })
    $("#nutrition").on('click',function(){
        $("#textNutrition").removeClass('labelHide');
        $("#textPuertoCruz").addClass('labelHide');
        $("#textCabimas").addClass('labelHide');
        $("#textHotelDinastia").addClass('labelHide');
        $("#textNutrition").addClass('text_proyect_sub');
    })
    $("#cabimas").on('click',function(){
        $("#textCabimas").removeClass('labelHide');
        $("#textPuertoCruz").addClass('labelHide');
        $("#textNutrition").addClass('labelHide');
        $("#textHotelDinastia").addClass('labelHide');
        $("#textCabimas").addClass('text_proyect_sub');
    })
    $("#hotelDinastia").on('click',function(){
        $("#textHotelDinastia").removeClass('labelHide');
        $("#textPuertoCruz").addClass('labelHide');
        $("#textNutrition").addClass('labelHide');
        $("#textCabimas").addClass('labelHide');
        $("#textHotelDinastia").addClass('text_proyect_sub');
    })
    

}

function Controller() {
    console.log("((Controller))");

  

}

function Model() {
    console.log("((Model))");

    //..
}

