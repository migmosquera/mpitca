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
    
    

}

function Controller() {
    console.log("((Controller))");

  

}

function Model() {
    console.log("((Model))");

    //..
}

