<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
?>
<style media="screen">
    .exhibition-box{
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
        -o-transition: 0.3s;
        -ms-transition: 0.3s;
    }
    .exhibition-box:hover{
        box-shadow:0 5px 20px rgba(0, 0, 0, 0.2);
    }
    .exhibition-box-img{
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
        padding-bottom: 100%;
    }

    @media (max-width:768px) {
        .exhibition-box h5{
            font-size: 15px;
        }

        .exhibition-box p{
            font-size: 13px;
        }
    }
</style>
<div class="container mt-5">
    <h5 class="font-weight-bold text-black">EVENT</h5>

    <div class="row my-5" id="exhibition-wrap">
        <!-- <div class="col-12 col-md-4">
            <div class="exhibition-box pointer">
                <div class="exhibition-box-img" style="background:url('http://175.125.92.172:3000/images/2022-04-15exhibition/20220415155457shop1.png')"></div>
                <h5 class="px-3 py-2">title</h5>
                <p class="px-3 pb-2">text</p>
            </div>
        </div> -->
    </div>

</div>

    <!-- Special Featured Area -->
    <section class="special_feature_area pt-5">
        <div class="container">
            <div class="row">
                <!-- Single Feature Area -->
                <div class="col-12 mb-2">
                    <h5>비앤코 안내</h5>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="feature_content">
                            <h6>무료 배송</h6>
                            <p>100,000원 이상 결제시 무료배송</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="feature_content">
                            <h6>환불</h6>
                            <p>7일이내 환불</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="feature_content">
                            <h6>100% 환불</h6>
                            <p>※상품 파손시 불가</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="feature_content">
                            <h6>상담 지원</h6>
                            <p>연중무휴 상담지원</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Featured Area -->

<script type="text/javascript">

    $(function(){
        LoadExhibitionList()
    })

    function LoadExhibitionList(){
        $.ajax({
	        url: SERVER_AP+"/common/all",
	        type: "post",
	        cache: false,
	        data:{
	            table: 'exhibition',
	        },
	        success: function(data){
				$.each(data,function(i,v){
					var str = `<div class="col-6 col-md-4">
                                    <div class="exhibition-box pointer" onclick="goExhibitionDetail(${v.e_seq})">
                                        <div class="exhibition-box-img" style="background:url('${v.e_thumnail}')"></div>
                                        <h5 class="px-3 py-2 mt-3 mb-0">${v.e_title}</h5>
                                        <p class="px-3 pb-4">${v.e_text}</p>
                                    </div>
                                </div>`;
					$("#exhibition-wrap").append(str);
				})
	        },
	        error: function (request, status, error){
	            console.log(error);
	        }
	    });
    }

    function goExhibitionDetail(e_seq){
        location.href = '/store.php?e_seq='+e_seq+'';
    }

</script>


<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
