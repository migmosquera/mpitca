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
        controller.sendProyect(idProyect, $(this)[0].name);
    });
    
    $("#closet_modal").on('click', function (){
        $("#container_content_proyect").addClass('labelHide');
        $("#container_content_sub_proyect").removeClass('labelHide');
        $(".title_content_proyect").remove();
        $(".content_proyect").remove();
        $(".title_contact_client").remove();
        $("#button_closet_modal").remove();
    });

}

function Controller() {
    console.log("((Controller))");
    
    this.sendProyect = function(id, nameTitle){
        var data = {
            "id": id,
        };
        var url = "controller/search_content_proyect.php";
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data)
            {   
                $("#container_content_proyect").removeClass('labelHide');
                $("#container_content_sub_proyect").addClass('labelHide');
                $('html, body').animate({
                    scrollTop: 80
                }, 1000);
                if (data == 'No trae Nada'){
                    var p = '<p id="title_content_proyect" class="title_content_proyect"> No hay Proyectos configurado </p>';
                    $("#title_servicios").html(nameTitle);
                    $('#container_content_proyect').append(p); 
                }else{
                    var json = JSON.parse(data);
                    
                    $("#title_servicios").html(nameTitle);
                    for (var i = 0; i < json.length; i++) {
                        var counter = json[i];
                        var container = '<div id="container_proyect_content">' 
                        var p = '<p id="title_content_proyect" class="title_content_proyect"><strong>'+counter.name_company+'</strong> </p>';
                        var div = '<div id="content_proyect" class="content_proyect"> '+counter.content_proyect+' </div>';
                        if (counter.contact_client != ''){
                            var contact = '<p id="title_contact_client" class="title_contact_client" style="text-align: left;"><strong>Contacto Cliente: </strong>'+counter.contact_client+' </p>';
                        }else{
                            var contact = ''    
                        }
                        container += '</div>'
                        $('#container_content_proyect').append(container,p,div,contact);
                    }
                }    
                var button = '<p id="closet_modal" class="button_closet_modal">Cerrar</p>';
                $('#container_content_proyect').append(button); 
                
                $("#closet_modal").on('click', function (){
                    $('html, body').animate({
                        scrollTop: 80
                    }, 1000);
                    $("#container_content_proyect").addClass('labelHide');
                    $("#title_servicios").html("Proyectos Realizados");
                    $("#container_content_sub_proyect").removeClass('labelHide');
                    $(".title_content_proyect").remove();
                    $(".title_contact_client").remove();
                    $(".content_proyect").remove();
                    $(".button_closet_modal").remove();
                });
            }
        });
    };
  

}

function Model() {
    console.log("((Model))");

    //..
}

