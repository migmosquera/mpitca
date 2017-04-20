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
    $(".container_title_proyect").on("click", function () {
        $("#btnEliminarTitulo").attr('lang',$(this)[0].title);
        $("#textNameTitle").val($(this)[0].title);
        $("#srcImgDelete").val($(this)[0].align);
        var idTitle = $(this)[0].id;
        $("#idTitle").val(idTitle.replace('containerPhoto_',''));
        $("#btnGuardarTitulo").addClass('label_hide');
        $("#btnEditarTitulo").removeClass('label_hide');
        $("#btnEliminarTitulo").removeClass('label_hide');
        $("#btnCancelarTitulo").removeClass('label_hide');
        $("#container_delete").addClass('label_hide');
        $("#textNameTitle").removeClass('label_hide');
        $("#imageContainer").removeClass('label_hide');
        $("#imgTitle").removeClass('label_hide');
        $("#msjTitle").removeClass('label_hide');
        var image_holder = $("#imageContainer");
        $("#img_container_title").remove();
        $("<img />", {
            "src": $(this)[0].lang,
            "class": "thumb-image",
            "id": 'img_container_title',
            "name": 'img_container_title'
        }).appendTo(image_holder);
        
    });
    
    $(".btn_cancelar_titulo").on("click", function () {
        $("#textNameTitle").val($(this)[0].title);
        $("#idTitle").val('');
        $("#textNameTitle").removeClass('label_hide');
        $("#imageContainer").removeClass('label_hide');
        $("#imgTitle").removeClass('label_hide');
        $("#btnGuardarTitulo").removeClass('label_hide');
        $("#container_delete").addClass('label_hide');
        $("#btnEditarTitulo").addClass('label_hide');
        $("#btnEliminarTitulo").addClass('label_hide');
        $("#btnCancelarTitulo").addClass('label_hide'); 
        $("#msjTitle").removeClass('label_hide');
        $("#img_container_title").remove();
    });
    
    $("#btnEliminarTitulo").on("click", function () {
        $("#textNameTitle").addClass('label_hide');
        $("#imageContainer").addClass('label_hide');
        $("#imgTitle").addClass('label_hide');
        $("#msjTitle").addClass('label_hide');
        $("#container_delete").removeClass('label_hide');
        $("#titleDelete").text($(this)[0].lang);
    });
    
    $("#imgTitle").on('change', function () {
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#imageContainer");
        image_holder.empty();
        if (extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof (FileReader) != "undefined") {
                for (var i = 0; i < countFiles; i++) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("<img />", {
                            "src": e.target.result,
                            "class": "thumb-image"
                        }).appendTo(image_holder);
                    };
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[i]);
                }
            } else {
            }
        }

    });
}

function Controller() {
    console.log("((Controller))");

    


}

function Model() {
    console.log("((Model))");

    //..
}

