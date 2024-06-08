$(document).ready(function(){

    console.log('---- contact start');

    if($(window).width() < 768){
        $(".banner_m").attr('src', '/img/contact/입점문의_배너_m.jpg')
    }

});


function email_insert(){

    var chk = confirm("해당내용으로 문의하시겠습니까?");

    if(chk){
        if($("#in_company").val() == ''){
            alert("해당 정보를 입력하세요.")
            $('#in_company').focus();
            return false;
        }else if( $("#in_num_st").val() == ''){
            alert("해당 정보를 입력하세요.")
            $('#in_num_st').focus();
            return false;
        }else if( $("#in_num_nd").val() == ''){
            alert("해당 정보를 입력하세요.")
            $('#in_num_nd').focus();
            return false;
        }else if( $("#in_num_rd").val() == ''){
            alert("해당 정보를 입력하세요.")
            $('#in_num_rd').focus();
            return false;
        }else if( $("#in_name").val() == '' ){
            alert("해당 정보를 입력하세요.")
            $('#in_name').focus();
            return false;
        }else if( $("#in_phone").val() == '' ){
            alert("해당 정보를 입력하세요.")
            $('#in_phone').focus();
            return false;
        }else if( $("#in_email").val() == '' ){
            alert("해당 정보를 입력하세요.")
            $('#in_email').focus();
            return false;
        }else if( $("#in_ad_num").val() == '' ){
            alert("해당 정보를 입력하세요.")
            $('#in_ad_num').focus();
            return false;
        }else if( $("#in_ad").val() == '' ){
            alert("해당 정보를 입력하세요.")
            $('#in_ad').focus();
            return false;
        }else if( $("#in_ad_detatil").val() == '' ){
            alert("해당 정보를 입력하세요.")
            $('#in_ad_detatil').focus();
            return false;
        }else if( $("#in_content").val() == '' ){
            alert("해당 정보를 입력하세요.")
            $('#in_content').focus();
            return false;
        }else if( $("#chk_success").prop("checked") == false ){
            alert('약관에 동의해주세요.');
            return false;
        }
        var emailVal = $("#in_email").val();

          var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
          // 검증에 사용할 정규식 변수 regExp에 저장

          if (emailVal.match(regExp) != null) {
          }
          else {
            alert('올바른 형식의 이메일을 입력해주세요.');
            return false;
          }
        var obj = new Object();
        obj.in_user = user_info.u_seq;
        obj.in_company = $("#in_company").val();
        obj.in_num_st = $("#in_num_st").val();
        obj.in_num_nd = $("#in_num_nd").val();
        obj.in_num_rd = $("#in_num_rd").val();
        obj.in_name = $("#in_name").val();
        obj.in_phone = $("#in_phone").val();
        obj.in_email = $("#in_email").val();
        obj.in_ad_num = $("#in_ad_num").val();
        obj.in_ad = $("#in_ad").val();
        obj.in_ad_detatil = $("#in_ad_detatil").val();
        obj.in_content = $("#in_content").val();
        obj.in_date = currentDate();

        $.ajax({
            url: SERVER_AP+"/admin/common/insert",
            type: "post",
            cache: false,
            data:{
                table: 'store_inquiry',
                obj:obj,
            },
            success: function(data){
                alert('전송되었습니다.');
                location.reload();
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }
}


$('#find_add').click(function(){
    findformAddr();
});

function findformAddr(){
    new daum.Postcode({
        oncomplete: function oncomplete(data) {
            $('#in_ad_num').val(''+data.zonecode+'');
            $('#in_ad').val(''+data.address+'');
        }
    }).open();
}
