

$(document).ready(function(){
    $('#c_content').summernote({
        lang:"ko-KR",
        placeholder: '내용을 입력해주세요.',
        height: 400
    });

    if(c_seq){
        loadCommunity();
        $(".update-btn").removeClass('d-none')
        $(".write-btn").remove()
    }
});

function loadCommunity(){
    var obj = new Object();
    obj.c_seq = c_seq
    $.ajax({
        url: SERVER_AP+"/common/condition",
        type: "post",
        cache: false,
        data:{
            table: 'community',
            common:obj,
        },
        success: function(data){
            $('#c_title').val(data[0].c_title);
            $('#c_content').summernote("code",data[0].c_content);
            $('#c_type').val(data[0].c_type)
        },
        error: function (request, status, error){
            console.log(error);
        }
    });
}

function insertCommunity(){
    if(!$('#c_title').val()){
        alert("제목을 입력해주세요.")
    }else if(!$('#c_content').summernote("code")){
        alert("내용을 입력해주세요.")
    }else{
        if(confirm("등록 하시겠습니까?")){
            var obj = new Object();
            obj.c_user = user_info.u_seq;
            obj.c_content = $('#c_content').summernote("code")
            obj.c_type = $('#c_type').val();
            obj.c_date = currentDate();
            obj.c_title = $('#c_title').val();
            $.ajax({
                url: SERVER_AP+"/common/insert",
                type: "post",
                cache: false,
                data:{
                    table: 'community',
                    obj:obj,
                },
                success: function(data){
                    location.href="/community.php"
                },
                error: function (request, status, error){
                    console.log(error);
                }
            });
        }
    }
}

function updateCommunity(){
    if(!$('#c_title').val()){
        alert("제목을 입력해주세요.")
    }else if(!$('#c_content').summernote("code")){
        alert("내용을 입력해주세요.")
    }else{
        if(confirm("수정 하시겠습니까?")){
            var obj = new Object();
            obj.c_user = user_info.u_seq;
            obj.c_content = $('#c_content').summernote("code")
            obj.c_type = $('#c_type').val();
            obj.c_title = $('#c_title').val();
            $.ajax({
                url: SERVER_AP+"/common/update",
                type: "post",
                cache: false,
                data:{
                    table: 'community',
                    obj:obj,
                    whereField:"c_seq",
                    whereValue:c_seq,
                },
                success: function(data){
                    location.href="/community.php"
                },
                error: function (request, status, error){
                    console.log(error);
                }
            });
        }
    }
}
