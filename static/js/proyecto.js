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
   $("#redesEmpresariales").on('click',function(){
       $("#redesEmpresarialesModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $(".closetModal").on('click',function(){
       $("#redesEmpresarialesModal").addClass('labelHide')
       $("#seguridadPerimetralModal").addClass('labelHide')
       $("#sistemaInformacionModal").addClass('labelHide')
       $("#sistemaTelefoniaModal").addClass('labelHide')
       $("#tecnologiaInalambricaModal").addClass('labelHide')
       $("#videoVigilanciaModal").addClass('labelHide')
       $("#estudiosRedesModal").addClass('labelHide')
       $("#container_content_sub_proyect").removeClass('container_opasicity')
   })
   $("#seguridadPerimetralInfo").on('click',function(){
       $("#seguridadPerimetralModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#sistemaInformacionInfo").on('click',function(){
       $("#sistemaInformacionModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#tecnologiaInalambricaInfo").on('click',function(){
       $("#tecnologiaInalambricaModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#videoVigilanciaInfo").on('click',function(){
       $("#videoVigilanciaModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#sistemaTelefoniaInfo").on('click',function(){
       console.log("paso por aqui");
       $("#sistemaTelefoniaModal").removeClass('labelHide')
       $("#container_content_sub_proyect").addClass('container_opasicity')
   })
   $("#estudiosRedesInfo").on('click',function(){
       $("#estudiosRedesModal").removeClass('labelHide')
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

