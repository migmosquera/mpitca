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
    
    $(".text_more_info").on('click',function (){
        var idProyect = $(this)[0].id.replace("button_","");
        controller.sendProyect(idProyect);
    });

}

function Controller() {
    console.log("((Controller))");
    
    this.sendProyect = function(id){
        var data = {
            "id": id,
        };
        var url = "controller/search_content_proyect.php";
        console.log(data);
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data)
            {   
                var json = JSON.parse(data);
               console.log(json);
               for (var i = 0; i < json.length; i++) {
                    var counter = json[i];
                    console.log(counter.content_proyect);
                }
               console.log("llego");
            }
        });
    };
  

}

function Model() {
    console.log("((Model))");

    //..
}

