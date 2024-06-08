<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $p_seq = $_GET['p_seq'];
?>

<style media="screen">

    .coupon_box{
        width: 500px;
        margin: 150px auto;
    }

    .all_coubon_btn{
        background: #333;
        color: #fff;
        font-size: 35px;
        text-align: center;
        padding: 20px 0px;
        cursor: pointer;
    }
    .off_down{
        background: #c4c4c4;
        color: #fff;
        font-size: 35px;
        text-align: center;
        padding: 20px 0px;
        cursor: pointer;
    }

        @media (max-width:780px) {
            .coupon_box{
                width: 100%;
            }
            .all_coubon_btn{
                font-size: 22px;
            }
        }

</style>

<!-- Header Area End -->
    <!-- Wishlist Table Area -->
    <div class="wishlist-table section_padding_100 clearfix">
        <div class="container text-center" id="c_con">



        </div>

        <div class="container">
            <div class="coupon_box">
                <div class="all_coubon_btn" onclick="allCoupon()">
                    모두 다운로드
                </div>
            </div>
        </div>
    </div>


<!-- JS -->
<script type="text/javascript">

    $(function(){
        loadCoupon()
        checkCoupon();
    })
var allArr = [];
    function loadCoupon(){
        obj = {
            c_use:1,
        }
        $.ajax({
            url: SERVER_AP+"/admin/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'coupon',
                common:obj,
            },
            success: function(data){

                $("#c_con").html("")
                if(data.length > 1){

                }
                $.each(data, function(i,v){

                    allArr.push(v.c_seq);
                    let str = `<div class="coupon_box">
                                    <img src="${v.c_img}" alt="" class="w-100 mb-3">
                                    <div class="coupondraw${v.c_seq}">
                                        <img src="/img/coupondown.PNG" alt="" class="w-100 pointer couponCheck${v.c_seq}" onclick="couponDown(${v.c_seq})">
                                    </div>
                                </div>`;
                    $("#c_con").append(str)
                })
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }

    function checkCoupon(){
        obj = {
            u_seq:user_info.u_seq,
        }
        $.ajax({
            url: SERVER_AP+"/admin/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'user_coupon',
                common:obj,
            },
            success: function(data){

                console.log('datauser', data);
                $.each(data, function(i,v){
                    var str = `<div onclick="alert('이미 받으신 쿠폰입니다.')" class="off_down ">
                        받은 쿠폰
                    </div>`
                    $('.coupondraw'+v.c_seq).html(str)

                });

            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }

    function couponDown(c_seq){
        if(!user_info){
            alert("로그인 후 이용하실 수 있습니다.")
            location.href = '/login.php';
            return
        }else{
            obj = {
                c_seq: c_seq,
                u_seq: user_info.u_seq,
            }
            $.ajax({
                url: SERVER_AP+"/admin/common/condition",
                type: "post",
                cache: false,
                async:false,
                data:{
                    table: 'user_coupon',
                    common:obj,
                },
                success: function(data){
                    if(data.length == 0){
                        if(confirm("해당 쿠폰을 발급받으시겠습니까?")){
                            var obj = new Object();
                            obj.u_seq = user_info.u_seq;
                            obj.c_seq = c_seq;
                            obj.uc_date = currentDate();
                            $.ajax({
                                url: SERVER_AP+"/admin/common/insert",
                                type: "post",
                                cache: false,
                                async:false,
                                data:{
                                    table: 'user_coupon',
                                    obj : obj,
                                },
                                success: function(data){
                                    alert("발급 되었습니다!")
                                },
                                error: function (request, status, error){
                                    console.log(error);
                                }
                            });
                        }
                    }else{
                        alert("해당 쿠폰은 1인당 한번만 발급 받을 수 있습니다.")
                    }
                },
                error: function (request, status, error){
                    console.log(error);
                }
            });
        }
    }



    function allCoupon(){

        if(user_info.u_seq){
            var check_coupon = false;

            $.each(allArr, function(i,v){
                obj = {
                    c_seq: v,
                    u_seq: user_info.u_seq,
                }

                $.ajax({
                    url: SERVER_AP+"/admin/common/condition",
                    type: "post",
                    cache: false,
                    async:false,
                    data:{
                        table: 'user_coupon',
                        common:obj,
                    },
                    success: function(data){
                        console.log('data', data);
                        if(data.length == 0){
                            check_coupon = true;
                            var obj = new Object();
                            obj.u_seq = user_info.u_seq;
                            obj.c_seq = v;
                            obj.uc_date = currentDate();
                            $.ajax({
                                url: SERVER_AP+"/admin/common/insert",
                                type: "post",
                                cache: false,
                                async:false,
                                data:{
                                    table: 'user_coupon',
                                    obj : obj,
                                },
                                success: function(data){

                                },
                                error: function (request, status, error){
                                    console.log(error);
                                }
                            });


                        }else{

                        }
                    },
                    error: function (request, status, error){
                        console.log(error);
                    }
                });
            })

            if(!check_coupon){
                alert("발급 가능한 쿠폰이 없습니다.");
            }else{
                alert("모두 발급 되었습니다!");
            }

            loadCoupon()
            checkCoupon();

        }else{
            alert('로그인후 이용가능합니다.')
            location.href = '/login.php';
        }

    }

</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
