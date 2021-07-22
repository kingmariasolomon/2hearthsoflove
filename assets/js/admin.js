// CONSTANTS
const PROOT =  '/2021/2heartsoflove/';

// GLOBAL VARIABLES ARE SET HERE
storage = window.localStorage;

// GLOBAL VARIABLES ENDS HERE



// GLOBAL FUNCTIONS
function Toast(background, color, position, text) {
    $('body').find("#toast-container").remove();
    $('<div id="toast-container">').addClass(position+" uk-position-fixed").css({"max-width": "300px !important", 'z-index': '2000'}).attr({'id':'toast'}).append(
        $('<div>').addClass("uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-text-center "+color+" "+ background).append(
            $('<span>').text(text)
        )
    ).appendTo('.site-content');
    var Toast = $("#toast");
    var ht = Toast.height();    Toast.css({'top': -ht+'px'});
    $("#toast").animate({'top': '20px'}, 1000, function (e) {
        $(this).delay(5000).fadeOut(1000, function (e) {
            $(this).remove();
        });
    });
}

function roundSwitcher(round="", callback=null) {
    var element = $(".switchElement");
    element.html(
        $('<label>').addClass("switch")
        .append($('<input>').attr({"type":"checkbox"}).click(function(e){
            if((typeof callback) =="function"){ callback(e.target, $(this).closest("td")); }
        }))
        .append($('<span>').addClass("slider "+round))
    );
    element.each(function (e) {
        if($(this).attr('value') == 1){
            $(this).find("input").prop("checked", true);
        }else if($(this).attr('value') == 0){
            $(this).find("input").prop("checked", false);
        }
    });
}

function ajaxChangeValue(data, url){
    $.ajax({
        url : PROOT+url,
        enctype: 'multipart/form-data',
        type : "POST",
        data : data,
        processData: false,
        contentType: false,
        success : function(resp){console.log(resp);
            if(resp.success){
                Toast('bg-success', 'txt-white', 'uk-position-top-right', resp.data.msg);
            }
        }
    });
}

function buildCard(container, editform, data=['0','0'], background='', title, subtitle=[0,0,0,0,0]) {
    $(container).append(
        $('<div>').addClass('prg_card').attr({'index': subtitle[4]})
        .append($('<i>').addClass("uk-icon off-btn delete_pro").attr({'uk-icon':"icon:trash", 'onclick':'deleteProgram(this,'+data[0]+','+data[1]+')'}))
        .append($('<i>').addClass("uk-icon off-btn edit_pro").attr({'uk-icon':"icon:pencil", 'onclick':'editProgram(this,'+editform+')'}))
        .append(
            $('<div>').addClass("uk-card uk-card-secondary uk-border-rounded uk-card-small uk-card-body")
            .append(
                $('<p>').addClass('p_title').text(title)
                .append($('<hr>'))
                .append($('<span>').addClass("p_day").text(subtitle[0]+' '))
                .append($('<span>').addClass("p_timer").text(subtitle[1]))
                .append($('<span>').addClass("uk-margin-right p_ampm").text(subtitle[2]))
                .append($('<span>').addClass('p_location').text(subtitle[3]))
            )
        )
    );
}

function loopFormSerializedArray(array) {
    var object = {};
    var d = new Date();
    array.forEach(obj => {
        object[obj.name] = obj.value;
    });
    object['index'] = d.getTime();
    return object;
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
        c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setLocalStorage(data=[], dataIds=[]) {
    if (data) {
        var storage = window.localStorage;
        data.forEach((element) => {
            dataIds[dataIds.length] = element.index;
            storage.setItem(element.index, JSON.stringify(element));
        });
    }
}

function editProgram(element, editformid) {
    var pro_card = $(element).parent('div.prg_card');
    var id = pro_card.attr('index');
    id = Number(id) // converting the string data type to number
    var edit_data = JSON.parse(storage.getItem(id));
    for (const key in edit_data) {
        $('#'+editformid).find('#'+key).val(edit_data[key])
    }
}

function deleteProgram(element, dataIds, databaseColumnName) {
    var pro_card = $(element).parent('div.prg_card');
    var id = pro_card.attr('index');
    id = Number(id) // converting the string data type to number
    if (confirm("Are You Sure You Want To Delete")) {
        removed_program = dataIds.splice(dataIds.indexOf(id), 1);
        // bellow is a duplicate code modify it later
        var container = [];
        for(i=0; i<dataIds.length; i++){
            container[i] = JSON.parse(storage.getItem(dataIds[i]));
        }
        let containerString = JSON.stringify(container);
        saveJson(PROOT+'admin/saveJson/'+databaseColumnName, databaseColumnName, containerString, function (rep) {
            if(rep.success){
                Toast('bg_ltgreen', 'txt-white', 'uk-position-top-right', "Programe Deleted Successfuly");
                storage.removeItem(id);
                pro_card.fadeOut('500', function () {
                    pro_card.remove();
                });
            }
        });
    } else {
        return false;
    } 
}

function saveJson(url, name, formdata, callback) {
    var jsonData = new FormData();
    jsonData.append(name, formdata);
    $.ajax({
        url : url,
        enctype: 'multipart/form-data',
        type : "POST",
        data : jsonData,
        processData: false,
        contentType: false,
        success : function(resp){console.log(resp);
            if(resp.success){
                if(callback)callback(resp);
            }else{ console.log(resp); }
        }
    });
    return;
}

function saveDataAsync(url, sliderdata, targetImgElement='', callback) {
    var formData = new FormData();
    formData.append("sliders", sliderdata);
    $.ajax({
        url : url,
        enctype: 'multipart/form-data',
        type : "POST",
        data : formData,
        processData: false,
        contentType: false,
        success : function(resp){
            if(resp.success){
                if(callback)callback(resp, targetImgElement);
            }else{console.log(resp);}
        }
    });
    return;
}

function makeUploadAsync(url, formSelector, targetImgElement='', callback) {
    $(formSelector).on('submit', function(e){
        e.preventDefault();
        var formdata = new FormData($(formSelector)[0]);
        $.ajax({
            url : url,
            enctype: 'multipart/form-data',
            type : "POST",
            data : formdata,
            processData: false,
            contentType: false,
            success : function(resp){console.log(resp);
                if(resp.success){
                    if(callback)callback(resp, targetImgElement);
                }else{ console.log(resp); }
            }
        });
        return;
    });
    $(formSelector).trigger("submit").off("submit");
}

function is_checked(selector){
    var checked = ":checked";
    if($(selector+checked).length != 0){
        return true;
    }else{
        return false;
    }
}

function previewFile(input, img_container) {
    if (input.files) {
        for (let i = 0; i < input.files.length; i++) {
            var reader =  new FileReader();
            reader.onload = function (e) {
                $(img_container).append($("<img>").css('margin', "10px 20px").attr({"src": e.target.result, "width": "auto", "height": "auto"}));
            };
            reader.readAsDataURL(input.files[i]);
        }
    }
}








    // $(".carrier").on("click", function(){
    //     // alert();
    //     var dynamic = $("#dynamic");
    //     var links = $(this).find("a").attr("href");
    //     $(dynamic).load(links);
    //     return false;
    // });


function returnonblur() {
    if ($(this).val() == "") {
    $(this).prev('label').animate({
        "top": "0px",
        "color": "rgb(252, 7, 7)",
        "font-size": "16px"
    });
    }
}

function returnonfocus() {
    $(this).prev('label').animate({
        "top": "-15px",
        "color": "#42BF47",
        "font-size": "14px"
    });
}