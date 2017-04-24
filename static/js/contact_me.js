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
    
    $("#title_contact").on("click",function (){
       $("#title_contact").removeClass('select_form');
    });
    this.validateNameBlur = $("#name_contact").blur(function () {
        controller.validateRequiredBiz('name_contact');
    });

    this.validateNameKeyup = $("#name_contact").keyup(function () {
        controller.validateRequiredBiz('name_contact');
    });
    
    this.validateMailBlur = $("#email_contact").blur(function () {
        controller.validateMailBiz('email_contact');
    });

    this.validateMailKeyup = $("#email_contact").keyup(function () {
        controller.validateMailBiz('email_contact');
    });
    this.validatePhoneBlur = $("#tel_contact").blur(function () {
        controller.validatePhoneBiz('tel_contact');
    });

    this.validatePhoneKeyup = $("#tel_contact").keyup(function () {
        controller.validatePhoneBiz('tel_contact');
    });

    this.validateComentBlur = $("#content_contact").blur(function () {
        controller.validateMessage('content_contact');
    });

    this.validateComentKeyup = $("#content_contact").keyup(function () {
        controller.validateMessage('content_contact');
    });

}

function Controller() {
    console.log("((Controller))");
    
    
    
    this.validateRequiredBiz = function (name) {
        var object = document.getElementById(name);
        var valueForm = object.value;
        var labelError = document.getElementById(name);
        var labelError1 = document.getElementById('labelErrorName');
        var filter=/^[A-Za-z\xF1\xD1]/i;

        if (filter.test(valueForm)) {
            $("#labelErrorName").removeClass("labelShow");
            $("#labelErrorName").addClass("labelHide");
            $(object).addClass('input_form');
            $(object).removeClass('class_red');
            $("#sendEmail").attr("disabled", false);
        } else {
            if ($(object).val() == ''){
                labelError.placeholder = "Ingrese el Nombre y Apellido";
                labelError1.innerHTML = "Ingrese el Nombre y Apellido";
            }else{
                labelError1.innerHTML = "Solo se permite letras";
            }
            $(object).removeClass('input_form');
            $(object).addClass('class_red');
            $("#labelErrorName").removeClass("labelHide");
            $("#labelErrorName").addClass("labelShow");
            $("#sendEmail").attr("disabled", true);
        }
    };

   this.validateMailBiz = function (email) {
        var object = document.getElementById(email);
        var valueForm = object.value;
        var labelError = document.getElementById(email);
        var filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var labelError1 = document.getElementById("errorMail");

        if (!(filter.test(valueForm))) {
            if ($(object).val() == ''){
                labelError.placeholder = "Ingrese el Email";
                labelError1.innerHTML = "Ingrese el Email";
            }else{
                labelError1.innerHTML = "Email Invalido";
            }
            $("#" + labelError.id).addClass("class_red");
            $("#sendEmail").attr("disabled", true);
            $("#errorMail").removeClass("labelHide");
            $("#errorMail").addClass("labelShow");
            
        }else {
            $(object).addClass('input_form');
            $(object).removeClass('class_red');
            $("#errorMail").removeClass("labelShow");
            $("#errorMail").addClass("labelHide");
            $("#sendEmail").attr("disabled", false);
        }
    };
    
    this.validatePhoneBiz = function (phone_number) {
        var object = document.getElementById(phone_number);
        var valueForm = object.value;
        var labelError = document.getElementById(phone_number);
        var filter = /[0-9]+$/;
        var labelError1 = document.getElementById("labelErrorPhone");

        if (!(filter.test(valueForm))) {
            if ($(object).val() == ''){
                 labelError.placeholder = "Ingrese el Numero Telefonico";
                 labelError1.innerHTML = "Ingrese el Numero Telefonico";
            }else{
                labelError1.innerHTML = "Numero Invalido Ej: 0000-000.00.00";
            }
           
            $("#" + labelError.id).addClass("class_red");
            $("#sendEmail").attr("disabled", true);
            $("#labelErrorPhone").removeClass("labelHide");
            $("#labelErrorPhone").addClass("labelShow");
            
        }else {
            $(object).addClass('input_form');
            $(object).removeClass('class_red');
            $("#labelErrorPhone").removeClass("labelShow");
            $("#labelErrorPhone").addClass("labelHide");
            $("#sendEmail").attr("disabled", false);
        }
    };
    
    this.validateMessage = function (comment) {
        var object = document.getElementById(comment);
        var labelError1 = document.getElementById("labelErrorComment");
        var valueForm = object.value;
        var labelError = document.getElementById(comment);

        if (valueForm == '' || valueForm.length == 0 || /^\s+$/.test(valueForm)) {
            labelError.placeholder =  "Ingrese Comentario";
            $("#" + labelError.id).addClass("class_red_text_area");
            labelError1.innerHTML = "Ingrese su Comentario";
            $("#labelErrorComment").removeClass("labelHide");
            $("#labelErrorComment").addClass("labelShow");
            $("#sendEmail").attr("disabled", true);
        } else {
            $("#" + labelError.id).removeClass("class_red_text_area");
            $("#labelErrorComment").removeClass("labelShow");
            $("#labelErrorComment").addClass("labelHide");
            $("#sendEmail").attr("disabled", false);
        }
    };
    
    
}

function Model() {
    console.log("((Model))");
    
    
    
    //..
}

