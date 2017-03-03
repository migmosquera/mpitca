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
    $(".button_more_info").on("click", function (e) {
       e.preventDefault();
       console.log($(this).context.id);
       controller.showDiv($(this).context.id);
    });   

}

function Controller() {
    console.log("((Controller))");
    this.showDiv = function (id) {
        var targetDiv = id.replace("more", "container");
        
        var divShown = $(".container_text_beneficio, .showDiv");
        divShown.removeClass("showDiv");
        divShown.addClass("hideDiv");

        var divHidden = $("#" + targetDiv);
        divHidden.removeClass("hideDiv");
        divHidden.addClass("showDiv");
        $('html, body').animate({
            scrollTop: 80
        }, 1000);
    };
  

}

function Model() {
    console.log("((Model))");

    //..
}

