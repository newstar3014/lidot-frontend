<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

    <style media="screen">
        table td{
            border: 1px solid #eaeaea;
        }
        table th{
            width: 30%;
        }

        .menu-box{
            border-radius: 5px;
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
            font-size: 15px;
            cursor: pointer;
        }


    </style>

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>마이페이지</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="shop_main.php">Home</a></li>
                        <li class="breadcrumb-item active">마이페이지/</li>
                        <li class="breadcrumb-item active">배송지추가</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Message Now Area -->
    <div class="message_now_area section_padding_100" id="contact">
        <div class="container">

            <div class="font-weight-bold mb-3"><span class="text-danger">* </span> 기본 배송지</div>

            <div class="order_whter border p-2 font-14">
                <div class="">
                    <div class="where_addr row m-0">
                        <div id="buyer_addr" class="col-10 p-0"></div>
                        <div class="col-2 p-0 text-right">
                            <span onclick="changeAddr();" class="btn btn-primary p-1 px-3 font-10 rounded-pill">변경</span>
                        </div>
                    </div>
                    <div class="text-secondary where_detail_addr">
                        <span id="buyer_name"></span>
                        <span id="buyer_tel"></span>
                    </div>
                    <select id="buyer_req" class="form-control mt-3 font-14">
                        <option value="">배송시 요청사항을 선택하세요.</option>
                        <option value="문 앞에 두세요.">문 앞에 두세요.</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- Message Now Area -->
<script type="text/javascript">
    var openWin;
    $(function(){
        loadMydata()
    })

    function loadMydata(){
        var obj = new Object();
        obj.dl_useq = user_info.u_seq;
        obj.dl_check = 'Y'
        $.ajax({
            url: SERVER_AP+"/admin/common/condition",
            type: "post",
            cache: false,
            data:{
                table: 'delivery_location',
                common:obj,
            },
            success: function(data){
                console.log('data', data);
                var address = data[0].dl_address + " " + data[0].dl_address_detail
                $('#buyer_addr').html(address)
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }

    // 배송지 변경 버튼 새창 띄워짐
    function changeAddr(){
        if(openWin != null) openWin.close();
        var _url = '/ordermanage.php';
        var _width = '500';
    	var _height = '700';
    	var _left = Math.ceil(( window.screen.width - _width )/2);
    	var _top = Math.ceil(( window.screen.width - _height )/2);

		openWin = window.open(_url, 'ORDER', 'width='+ _width +', height='+ _height +', left=' + _left + ', top='+ _top );
    }
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
