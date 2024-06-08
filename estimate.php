<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>견적서</title>

        <link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/common.css" rel="stylesheet">
    	<link href="/css/header.css" rel="stylesheet">
    	<link href="/css/footer.css" rel="stylesheet">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    	<!-- JS -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    	<script src="/js/bootstrap.bundle.min.js"></script>
    	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    	<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    	<script src="/js/all.js"></script>
    	<script src="/js/common.js"></script>
    	<link rel="stylesheet" href="css/temp/style.css">
    	<link rel="stylesheet" href="css/common.css">
    	<link rel="stylesheet" href="css/temp/css/index/index.css">
    	<link rel="stylesheet" href="css/pages/shop_header/common.css">
    	<!-- JS -->

    	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    </head>
    <body>

    <style media="screen">

        .btn-primary{
    		border: 1px solid #dee2e6 !important;
    		background: white;
    		color: black;
    		font-weight: normal;
    		border-radius: 0;
    	}
    	.btn-secondary{
    		border: 1px solid #dee2e6 !important;
    		background: #555;
    		color: white;
    		font-weight: normal;
    		border-radius: 0;
    	}
    	.btn-primary:hover{
    		background: white;
    		color: black;
    	}
    	.btn-secondary:hover{
    		background: #555;
    		color: white;
    	}

        .head_Box, .bigshop-main-menu, #recent_product{
            display: none;
        }

        table {
            width: 100%;
            font-size: 13px;
            text-align: center;
        }

        table td, table th{
            border: 1px solid black;
            padding: 2px;
        }

        table th{
            background-color: #eaeaea;
        }

        input{
            width: 100%;
            border: none;
            outline: none;
            text-align: center;
        }

        textarea{
            width: 100%;
            border: none;
            outline: none;
            resize: none;
            height: 50px;
            padding: 5px 0;
        }

        /* .empty_tr td{
            padding: 10px 0;
        } */

        #title{
            font-size: 30px;
            font-weight: bold;
            position: relative;
        }

        #title img{
            position: absolute;
            bottom: 3px;
            left: 5px;
            width: 35px;
        }

        #totalPice_div{
            padding: 10px 0;
        }

        #totalPice_div span, #totalPice_div div{
            font-weight: bold;
            font-size: 20px;
        }

        #totalPice_div div{
            width: 150px;
            border-bottom: 2px solid black;
            text-align: right;
            margin: 0 15px;
        }


        @media print {
            html, body { -webkit-print-color-adjust:exact; width: 210mm; height: 297mm; }
            table { page-break-inside:auto; }
            tr    { page-break-inside:avoid; page-break-after:auto; }
            thead { display:table-header-group; }
            tfoot { display:table-footer-group; }
        }
    </style>

<div class="container my-5 py-5" id="print_wrap">
    <table>
        <tr>
            <td colspan="2" id="title">
                거 래 명 세 서
                <img src="/img/estimate_logo.PNG" alt="">
            </td>
            <td colspan="2">
                <table>
                    <tr>
                        <td rowspan="6">공급자</td>
                        <td>등록번호</td>
                        <td colspan="2">258-58-00309</td>
                        <td rowspan="4">
                            <img src="/img/estimate_stamp.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>상호</td>
                        <td colspan="2">집앤바스</td>
                    </tr>
                    <tr>
                        <td>대표</td>
                        <td colspan="2">김신애, 김인애</td>
                    </tr>
                    <tr>
                        <td>사업장주소</td>
                        <td colspan="2">수원시 권선구 서수원로 523번길 20-1</td>
                    </tr>
                    <tr>
                        <td>업태</td>
                        <td>도매 및 소매업</td>
                        <td>종목</td>
                        <td>건축자재 욕실자재</td>
                    </tr>
                    <tr>
                        <td>전화</td>
                        <td>031-891-0610</td>
                        <td>팩스</td>
                        <td>0504-022-6232</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>견 적 번 호</td>
            <td>
                <input type="text" name="" value="">
            </td>
            <td>거 래 처 명</td>
            <td>
                <input type="text" name="" value="" id="u_company">
            </td>
        </tr>
        <tr>
            <td>견 적 일 자</td>
            <td id="now_date">0000년 00월 00일 토요일</td>
            <td>공 사 명</td>
            <td>
                <input type="text" name="" value="">
            </td>
        </tr>
        <tr>
            <td>담 당 자</td>
            <td>
                <input type="text" name="" value="">
            </td>
            <td>배송주소지</td>
            <td>
                <input type="text" name="" value="" id="u_addr">
            </td>
        </tr>
        <tr>
            <td>입 금 조 건</td>
            <td>
                <input type="text" name="" value="">
            </td>
            <td>배 송 조 건</td>
            <td>
                <input type="text" name="" value="">
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="d-flex align-items-center justify-content-center" id="totalPice_div">
                    <span>금액</span> <div class="totalPrice"></div> (VAT 포함가)
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <table>
                    <tr>
                        <th style="width:5%;">No.</th>
                        <th>품번</th>
                        <th>품명</th>
                        <th>수량</th>
                        <th>단가</th>
                        <th>주문금액</th>
                        <th>부가세</th>
                        <th>합계</th>
                        <th>비고</th>
                    </tr>
                    <tbody id="tbody_wrap">
                        <!-- <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr> -->
                    </tbody>
                    <tr>
                        <th></th>
                        <th colspan="2">전체합계</th>
                        <th></th>
                        <th></th>
                        <th class="totalPrice"></th>
                        <th>-</th>
                        <th class="totalPrice"></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>확인사항</td>
                        <td colspan="8">
                            <textarea name="name" rows="8" cols="80"></textarea>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<div class="d-flex align-items-center justify-content-center my-5">
    <span class="btn btn-sm btn-primary border-0" id="printBtn">PDF 다운</span>
    <span class="btn btn-sm btn-primary ml-2" id="savePdfBtn">메일로 보내기</span>
    <!-- <span class="btn btn-sm btn-primary ml-2" onclick="window.print()">인쇄</span> -->
    <span class="btn btn-sm btn-secondary ml-2" onclick="window.close()">닫기</span>
</div>


<div class="modal" tabindex="-1" role="dialog" id="email_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="" value="" class="form-control form-control-sm text-left" placeholder="이메일을 입력해주세요." id="send_for_email">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="changeImage()">메일 보내기</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script type="text/javascript">

    var u_seq = window.location.href.split('?u_seq=')[1]
    var user_info;
    var totalPrice = 0;

    function loadUserInfo(){
	    $.ajax({
	        url: SERVER_AP+"/user/user/condition",
	        type: "post",
	        cache: false,
            async:false,
	        data:{
	            u_seq: u_seq
	        },
	        success: function(data){
				user_info = data
	        },
	        error: function (request, status, error){
	            console.log(error);
	        }
	    });
    }

    $(function(){

        loadUserInfo()

        $("#now_date").text(nowDate())
        $("#u_company").val(user_info.u_company)
        if(user_info.u_addr){
            $("#u_addr").val(user_info.u_addr + ' ' + user_info.u_addr_detail)
        }


        $.ajax({
            url: SERVER_AP+"/cart/list-ck",
            type: "post",
            cache: false,
            async:false,
            data:{
                u_seq:user_info.u_seq,
            },
            success: function(data){
                //console.log("Data >>",data);
                $.each(data.rows, function(i,v){
                    let opYn = proInfo(v.p_seq).p_option;
                    if(opYn == 'Y'){ // 옵션상품 일때
                        let p_info = proInfo(v.p_seq)
                        let po_info = opInfo(v.po_seq)
                        let str = `<tr class="pro-tr">
                                    <td class=tr-num></td>
                                    <td>${p_info.p_model}</td>
                                    <td>${p_info.name} / ${po_info.name}</td>
                                    <td>${v.c_cnt}</td>
                                    <td>${comma(p_info.price*1 + po_info.price*1)}</td>
                                    <td>${comma(v.c_cnt * p_info.price*1 + po_info.price*1)}</td>
                                    <td>-</td>
                                    <td>${comma(v.c_cnt * p_info.price*1 + po_info.price*1)}</td>
                                    <td>
                                        <input type="text" name="" value="">
                                    </td>
                                </tr>`;
                        $("#tbody_wrap").append(str)

                        totalPrice += v.c_cnt * p_info.price*1 + po_info.price*1
                    }else{
                        let p_info = proInfo(v.p_seq)
                        let str = `<tr class="pro-tr">
                                    <td class=tr-num></td>
                                    <td>${p_info.p_model}</td>
                                    <td>${p_info.name}</td>
                                    <td>${v.c_cnt}</td>
                                    <td>${comma(p_info.price)}</td>
                                    <td>${comma(v.c_cnt * p_info.price)}</td>
                                    <td>-</td>
                                    <td>${comma(v.c_cnt * p_info.price)}</td>
                                    <td>
                                        <input type="text" name="" value="">
                                    </td>
                                </tr>`;
                        $("#tbody_wrap").append(str)

                        totalPrice += v.c_cnt * p_info.price*1
                    }
                })

                $(".totalPrice").text(comma(totalPrice))

                for(let i=0; i<15-$(".pro-tr").length; i++){
                    let str = `<tr class="empty_tr">
                                    <td class=tr-num></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>`;
                    $("#tbody_wrap").append(str)
                }

                $.each($(".tr-num"), function(i,v){
                    $(v).text(i+1)
                })
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    })

    function proInfo(p_seq){
        var info = [];
        var obj = new Object();
        obj.p_seq = p_seq;
        $.ajax({
            url: SERVER_AP+"/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'product',
                common:obj,
            },
            success: function(data){
                info = {stock:data[0].p_stock,
                            name:data[0].p_name,
                            img:data[0].p_image,
                            price:(data[0].p_wholesale && user_info.u_type == '사업자회원') ? data[0].p_wholesale : data[0].p_price,
                            dt_seq:data[0].dt_seq,
                            p_purchase:data[0].p_purchase,
                            p_option:data[0].p_option,
                            p_model:data[0].p_model,
                        }
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
        return info;
    }

    function opInfo(po_seq){
        var info = [];
        var obj = new Object();
        obj.po_seq = po_seq;
        $.ajax({
            url: SERVER_AP+"/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'product_option',
                common:obj,
            },
            success: function(data){
                if(data.length == 0){
                    info = false
                }else{
                    info = {p_seq : data[0].p_seq, stock : data[0].po_stock, name : data[0].po_option1 +' '+ data[0].po_option2, price:data[0].po_price}
                }
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
        return info;
    }


    function nowDate(){
        var date = new Date; // Date 객체
        let yoilArr = ['일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일']
        return `${date.getFullYear()}년 ${(date.getMonth() + 1)}월 ${date.getDate()}일 ${yoilArr[date.getDay()]}`
    }




    // $('#savePdfBtn').click(function() {

    // });

    function changeImage(){
        if(confirm(`${user_info.u_email}로 이메일을 보내시겠습니까?`)){
            let imgData = '';
            html2canvas($('#print_wrap')[0]).then(function(canvas) {
                imgData = canvas.toDataURL('image/png');
                sendMail(imgData);
            });
        }
    }

    function sendMail(imgData){
        $.ajax({
            url: SERVER_AP+"/user/sendMail",
            type: "post",
            cache: false,
            data:{
                email: user_info.u_email,
                image:imgData,
            },
            beforeSend: function( xhr ) {
                Loading2()
        	},
            success: function(data){
                console.log('data : ', data)
                alert(data.message);
                $("#email_modal").modal('hide')
                $("#div_ajax_load_image").remove();
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }

    $('#savePdfBtn').click(function() {
        changeImage();
        // $("#send_for_email").val(user_info.u_email)
        // $("#email_modal").modal('show')
    });


    $('#printBtn').click(function(){
            html2canvas($('#print_wrap')[0]).then(function(canvas) {
                // 캔버스를 이미지로 변환
                let imgData = canvas.toDataURL('image/png');

                let margin = 10; // 출력 페이지 여백설정
                let imgWidth = 210 - (10 * 2); // 이미지 가로 길이(mm) A4 기준
                let pageHeight = imgWidth * 1.414;  // 출력 페이지 세로 길이 계산 A4 기준
                let imgHeight = canvas.height * imgWidth / canvas.width;
                let heightLeft = imgHeight;

                let doc = new jsPDF('p', 'mm');
                let position = margin;

                // 첫 페이지 출력
                doc.addImage(imgData, 'PNG', margin, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;

                // 한 페이지 이상일 경우 루프 돌면서 출력
                while (heightLeft >= 20) {
                    position = heightLeft - imgHeight;
                    doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    doc.addPage();
                    heightLeft -= pageHeight;
                }

                // 파일 저장
                doc.save('거래명세서.pdf');
            });
    })

</script>

    </body>
</html>
