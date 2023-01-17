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

//riesenie pri zapise do databazy z checkboxu 'active'
$(function (){
    activeState();
    $("active").click(activeState);
});

function activeState(){
    if(this.checked){
        document.getElementById('activeHidden').disabled = true;
    } else {
        document.getElementById('activeHidden').disabled = false;
    }
}

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

//riesenie zapisu do databazy so spravnymi hodnotami pri checkboxoch a zobrazenie ostatnych tried len pri multiclasse
$(function(){
    enableGroups();
    $("#multiclass").click(enableGroups);
});

function enableGroups(){
    if(this.checked){
        $("#class2").removeAttr("disabled");
        $("#class3").removeAttr("disabled");
        document.getElementById('multiclassHidden').disabled = true;
        document.getElementById('class2Hidden').disabled = true;
        document.getElementById('class3Hidden').disabled = true;
    } else {
        $("#class2").attr("disabled", true);
        $("#class3").attr("disabled", true);
        document.getElementById('multiclassHidden').disabled = false;
        document.getElementById('class2Hidden').disabled = false;
        document.getElementById('class3Hidden').disabled = true;
    }
}

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
