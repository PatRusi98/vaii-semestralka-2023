//menu poriesene pri zmenseni obrazovky - STARE
var menuItems = document.getElementById("menu-items");
menuItems.style.maxHeight = "0px";
function toggleMenu() {
    if(menuItems.style.maxHeight == "0px") {
        menuItems.style.maxHeight = "350px"
    } else {
        menuItems.style.maxHeight = "0px"
    }
}

//setup ajaxu
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//ajax call pri vytvarani noveho sampionatu
$(".btn-submit").click(function(e){

    e.preventDefault();

    var name = $("#name").val();
    var active = $("#active").val();
    var multiclass = $("#multiclass").val();
    var class1 = $("#class1").val();
    var class2 = $("#class2").val();
    var class3 = $("#class3").val();

    if(!class3.isNull){
        document.getElementById('class3Hidden').disabled = true;
    } else {
        document.getElementById('class3').disabled = true;
    }

    $.ajax({
        type:'POST',
        url:"{{ route('admin.championships.store') }}",
        data:{name:name, active:active, multiclass:multiclass,
            class1:class1, class2:class2, class3:class3},
        success:function(data){
            if($.isEmptyObject(data.error)){
                alert(data.success);
                location.reload();
            }
        }
    });
});

//paginator
$(document).ready(function (){
    $(document).on('click', '.pagination a', function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    });

    function fetch_data(page){
        $.ajax({
            url:"/cars/ajax?page="+page,
            success:function(data){
                $('#table').html(data);
            }
        });
    }
});

//handler na zapis spravnej hodnoty do databazy pri checkboxe active
$(function (){
    activeState();
    $("#active").click(activeState);
});

function activeState(){
    if(this.checked){
        $("#activeHidden").attr("disabled", true);
    } else {
        $("#activeHidden").removeAttr("disabled");
    }
}

//handler na zapis spravnej hodnoty do databazy pri checkboxe multiclass
$(function(){
    enableGroups();
    $("#multiclass").click(enableGroups);
});

function enableGroups(){
    if(this.checked){
        $("#class2").removeAttr("disabled");
        $("#class3").removeAttr("disabled");
        $("#multiclassHidden").attr("disabled", true);
        $("#class2Hidden").attr("disabled", true);
        $("#class3Hidden").attr("disabled", true);
    } else {
        $("#class2").attr("disabled", true);
        $("#class3").attr("disabled", true);
        $("#multiclassHidden").removeAttr("disabled");
        $("#class2Hidden").removeAttr("disabled");
        $("#class3Hidden").removeAttr("disabled");
    }
}
