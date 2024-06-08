<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $p_seq = $_GET['p_seq'];
?>

<!-- CSS -->
<style media="screen">
    .section5Imgdiv{
        width: 100%;
        padding-bottom: 100%;
        border-radius: 10px;
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: cover !important;
        position: relative;
    }
    .comingsoon::after{
        display: block;
        content: "";
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        position: absolute;
        top:0;
        left: 0;
    }
    .comingsoon::before{
        display: block;
        content: "COMMING SOON";
        color: white;
        font-weight: bold;
        font-size: 30px;
        position: absolute;
        top:50%;
        left: 50%;
        z-index: 1;
        transform: translate(-50%, -50%);
    }
    .sesection5numCircle{
        position: absolute;
        bottom:-40px;
        left: 50%;
        transform: translate(-50%,0);
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 12px solid white;
        background: black;
        color: white;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 25px;
    }
    .sesection5ImgText{
        font-size: 15px;
        color: #666;
        width: 100%;
        text-overflow: ellipsis;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
    .sesection5ImgText span{
        font-size: 16px;
        font-weight: bold;
        color: black;
    }
</style>
<!-- Header Area End -->
    <!-- Wishlist Table Area -->
    <div class="section_padding_100 clearfix container">
        <div class="row pt-4 pt-lg-5" id="project_section">
            <!-- <div class="col-12 col-lg-4 px-lg-4">
                <div class="section5Imgdiv mb-lg-5 mb-3 comingsoon" style="background: url('/img/landingpage/section5img3.png');">
                    <div class="sesection5numCircle">3.</div>
                </div>
                <p class="sesection5ImgText pt-4 mb-lg-0 mb-5"><span>사무실 With B&CO</span> <br> 편안한공간을 연출해 보았습니다.</p>
            </div> -->
        </div>
    </div>


<!-- JS -->
<script type="text/javascript">

    $(function(){
        loadProject()
    })

    function loadProject(){
        var winwidth = $(window).width()
        var obj = new Object();
        obj.p_type = winwidth > 768 ? 'PC' : 'M'
        $.ajax({
            url: SERVER_AP+"/admin/common/condition",
            type: "post",
            cache: false,
            data:{
                table: 'project',
                common:obj,
            },
            success: function(data){
                $("#project_section").html('');
                if(data.length == 0){
                    let str = `<div class="mx-auto">
                                    <p>진행중인 프로젝트가 없습니다.</p>
                                </div>`;
                    $("#project_section").append(str);
                }else{
                    $.each(data,function(i,v){
                        let str = `<div class="col-12 col-lg-4 px-lg-4 mt-5 mt-md-0">
                                        <div class="section5Imgdiv pro_img_${v.p_seq} mb-lg-5 mb-3 ${v.p_comming_soon == 'Y' ? 'comingsoon' : 'pointer'}" style="background: url('${v.p_img}'); padding-bottom:0%;">
                                            <img src='${v.p_img}' style="border-radius: 20px;"/>
                                            <div class="sesection5numCircle">${i+1}.</div>
                                        </div>
                                        <p class="sesection5ImgText sesection5ImgText2 pt-4 mb-lg-0 mb-5"><span>${v.p_title}</span> <br> ${v.p_text}</p>
                                    </div>`;
                        $("#project_section").append(str);

                        if(v.p_comming_soon != 'Y'){
                            $(`.pro_img_${v.p_seq}`).attr('onclick', `location.href="/project_detail.php?p_seq=${v.p_seq}"`)
                        }
                    })
                }
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
