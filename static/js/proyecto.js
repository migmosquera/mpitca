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
   $("#sercompresaInfo").on('click',function(){
       $("#sercompresaModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $(".closetModal").on('click',function(){
       $("#sercompresaModal").addClass('labelHide')
       $("#policiaChacaoModal").addClass('labelHide')
       $("#metroCaracasModal").addClass('labelHide')
       $("#ministerioCabimasModal").addClass('labelHide')
       $("#novartisModal").addClass('labelHide')
       $("#hotelDinastiaModal").addClass('labelHide')
       $("#ministerioCruzModal").addClass('labelHide')
       $("#anubisModal").addClass('labelHide')
       $("#container_content_sub_proyect").removeClass('container_opasicity')
   })
   $("#policiaChacaoInfo").on('click',function(){
       $("#policiaChacaoModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#metroCaracasInfo").on('click',function(){
       $("#metroCaracasModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#ministerioCruzInfo").on('click',function(){
       $("#ministerioCruzModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#novartisInfo").on('click',function(){
       $("#novartisModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#hotelDinastiaInfo").on('click',function(){
       $("#hotelDinastiaModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#ministerioCabimasInfo").on('click',function(){
       $("#ministerioCabimasModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#anubisInfo").on('click',function(){
       $("#anubisModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })

}

function Controller() {
    console.log("((Controller))");

  

}

function Model() {
    console.log("((Model))");

    //..
}

