$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on('click', ".savePost", function (e) {
    e.preventDefault();
    var id = $(this).attr('id');
    $.ajax({
        type: 'get',
        url: '/savepost/' + id,
        data: { id: id },
        success: function (data) {
            alert(data.html);
        }
    });
});
$(document).on('click',"#info_id",function(e){
    e.preventDefault();
     id = $(this).attr('name');
     $.ajax({
         type:'get',
         url:'/thongtin/'+id,
         success:function(data){
          //   alert(data.html);
             $('#daluu_id').empty();
            $('#daluu_id').append(data.html);
         }
     });
});
$('.week').click(function () {
    id = $(this).html();
    $.ajax({
        type: 'get',
        url: '/topweek/' + id,
        success: function (data) {
            // alert(data.html);
            $('#top_week').empty();
            $("#top_week").append(data.html);
        }
    });
});
$('.new_post').click(function () {
    id = $(this).html();
    $.ajax({
        type: 'get',
        url: '/newpost/' + id,
        success: function (data) {
            //  alert(data.html);
            $('#id_new_post').empty();
            $("#id_new_post").append(data.html);
        }
    });
});
function addSearch() {
    $.ajax({
        type: 'post',
        url: '/search/advance',
        data: $('#searchForm').serialize(),
        dataType: 'json',
        success: function (data) {
            $('#id-monan1').html('');
            $('#id-monan1').append(data.html);
         //   alert(data.html);
        }
    });
}
function postCmt(i) {
    var comment = $('#ipComment').val();
    var id = i;
    if (comment != "") {

    }
    $.ajax({
        type: 'post',
        url: '/comment',
        data: { comment: comment, id: id },
        success: function (data) {
            $('#ipComment').val("");
            $('#newComment').append(data.html);
        }
    });
}
function rate(i, id) {
    $.ajax({
        type: 'post',
        url: '/rate',
        data: { point: i, id: id },
        success: function (data) {
            alert(data.html);
        }
    });
}
$(document).ready(function () {
    $(".fa-star").mousemove(function () {
        id = $(this).attr('id');
        j = 5 - id;
        if (j > 0) {
            for (i = 5; i > j - 3; i--) {
                $("#" + i).css("color", "black");
            }
        }
        for (i = 1; i <= id; i++) {
            $("#" + i).css("color", "yellow");
        }
    });
});
$('.savePreson').click(function(){
     id=$(this).attr('id');
     $.ajax({
        type: 'get',
        url: '/saved/'+id,
        success: function (data) {
           // alert(data.html);
            $('#daluu_id').empty();
            $('#daluu_id').append(data.html);
        }
    });
});
var list=1;
$(document).on('click','.listnew_class',function(){
    list++;
    $.ajax({
        type: 'get',
        url: '/list/new/'+list,
        success: function (data) {
           // alert(data.html);
           // $('#daluu_id').empty();
            $('#list_id').append(data.html);
        }
    });

});
