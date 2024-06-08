function LoadHashtag(){
    $.ajax({
        url: SERVER_AP+"/main/hashtag-list",
        type: "post",
        cache: false,
        data:{table:"hashtag"},
        success: function(data){
            if(data.length == 0){
                var nstr = `<div class='py-5 text-center'>등록된 해쉬태그가 없습니다.</div>`;
                $("#hashtag-wrap").append(nstr);
            }else{
                $.each(data,function(i,v){
                    var str = `<div class="col-md-3 col-6">
                                    <div class="hashtag-col position-relative">
                                        <div class="hashtag-img" style="background:url(${v.h_img})"></div>
                                        <span class="pointer" onclick="brClick('${v.h_name}')">#${v.h_name}</span>
                                    </div>
                                </div>`;
                    $("#hashtag-wrap").append(str);
                })
            }
        },
        error: function (request, status, error){
            console.log(error);
        }
    });
}

function brClick(h_name){
    location.href = '/store.php?sk='+h_name;
}
