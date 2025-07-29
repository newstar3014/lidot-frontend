<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<div id="common-page-title"></div>

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="row">
            <? include_once '_nav.php'; ?>
            <div class="col-lg-9">
                <div class="my-account-content account-order">
                    <div class="d-flex justify-content-between mb-3">
                        <span>총 <span id="total-count"></span>건</span>
                        <span class="tf-btn tf-btn-small btn-fill animate-hover-btn rounded-0 justify-content-center" onclick="openModalDeli(0)">신규 등록</span>
                    </div>
                    <div class="wrap-account-order">
                        <table>
                            <thead>
                                <tr>
                                    <th class="fw-6 text-center">No.</th>
                                    <th class="fw-6 text-center">받는이</th>
                                    <th class="fw-6 text-center">주소</th>
                                    <th class="fw-6 text-center">연락처</th>
                                    <th class="fw-6 text-center">기능</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-users_delivery"></tbody>
                        </table>

                        <div id="no-data" class="py-3 text-center d-none">
                            <i class="bi bi-info-circle"></i><br>
                            조회되는 데이터가 없습니다.
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->


<!-- 모달 오버레이 -->
<div id="addressModal" style="display:none; position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);z-index:9999;">
    <div style="max-width:500px;margin:100px auto;background:#fff;padding:30px;border-radius:10px;position:relative;">
        <h2 style="font-size:24px;margin-bottom:20px;">배송지 등록</h2>

        <div class="form-group mb-2">
            <label>받는이</label>
            <input type="text" id="modal_name" class="form-control" placeholder="이름을 입력하세요">
        </div>
        <div class="form-group mb-2">
            <label>연락처</label>
            <input type="text" id="modal_phone" class="form-control" placeholder="휴대폰 번호 입력 ('-' 제외)">
        </div>
        <div class="form-group mb-2">
            <label>주소</label>
            <div style="display:flex;gap:10px;margin-bottom:8px;">
                <input type="text" id="modal_zipcode" class="form-control" placeholder="우편번호" readonly style="flex:1;">
                <button type="button" onclick="execDaumPostcode()" style="background:#111;color:#fff;padding:10px 15px;border:none;border-radius:5px;">주소찾기</button>
            </div>
            <input type="text" id="modal_address" class="form-control" placeholder="기본주소" readonly style="margin-bottom:8px;">
            <input type="text" id="modal_address_detail" class="form-control" placeholder="상세주소">
        </div>
        <div class="form-group mb-2">
            <label><input type="checkbox" id="modal_default"> 기본 배송지로 설정</label>
        </div>

        <div style="display:flex;justify-content:space-between; margin-top:20px;">
            <button id="insert-btn" onclick="saveAddress()" style="background:#111;color:#fff;padding:12px 20px;border:none;border-radius:8px;width:48%;">저장</button>
            <button onclick="closeModal()" style="background:#ddd;color:#333;padding:12px 20px;border:none;border-radius:8px;width:48%;">취소</button>
        </div>
    </div>
</div>


<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
    $(function() {
        console.log('ㅡ PAGE READY');
        $('#mypage-deli_loca').addClass('active');
        setPageTitle('배송지 관리', 'delivery location');

        dataLoad();
    });

    function openModalDeli(_seq){
        if(_seq == '0'){
            console.log('신규 등록');
            openModal();
        }else{
            console.log(_seq + '번 수정');
            setData(_seq);
            openModal();
        }
        
    }


    function openModal() {
        $('#addressModal').show();
    }

    function closeModal() {
        $('#addressModal').hide();
        $('#addressModal input').val('');
        $('#modal_default').prop('checked', false);
        $('#insert-btn').removeAttr('data-seq');
    }

    function execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                $('#modal_zipcode').val(data.zonecode);
                $('#modal_address').val(data.roadAddress);
                $('#modal_address_detail').focus();
            }
        }).open();
    }

    function saveAddress() {
        let _seq = $('#insert-btn').attr('data-seq');

        
        let person = $('#modal_name').val().trim();
        let phone = $('#modal_phone').val().trim().replace(/[^0-9]/g, '');
        let address_postnum = $('#modal_zipcode').val().trim();
        let address = $('#modal_address').val().trim();
        let address_detail = $('#modal_address_detail').val().trim();
        let default_yn = $('#modal_default').is(':checked') ? 'Y' : 'N';

        if (!person || !phone || !address_postnum || !address || !address_detail) {
            alerts("warning", "모든 필수 정보를 입력해주세요.");
            return;
        }

        let obj = {
            user_seq:my_obj.user_seq,
            person,
            phone,
            address_postnum,
            address,
            address_detail,
            default_yn
        }
        
        

        if(default_yn == 'Y'){
            ajaxCall('/common/update/where', { 
                table:'users_delivery',
                whereField:'user_seq',
                whereValue:my_obj.user_seq,
                obj:{default_yn:'N'}
            }, function(data) {
                console.log('data : ', data);
                
                if(_seq){
                    updateDelivery(obj, _seq);
                }else{
                    insertDelivery(obj);
                }

            });

        }else{
            if(_seq){
                updateDelivery(obj, _seq);
            }else{
                insertDelivery(obj);
            }
            
        }
        
    
    }

    function updateDelivery(obj, _seq){
        ajaxCall('/common/update', { 
            table:'users_delivery',
            seq:_seq,
            obj,

        }, function(data) {
            console.log('data : ', data);
            
            alerts("success", "배송지가 수정되었습니다.");
            closeModal();
            dataLoad();

        });
    }


    function insertDelivery(obj){
        ajaxCall('/common/insert', { 
            table:'users_delivery',
            obj
        }, function(data) {
            console.log('data : ', data);
            
            alerts("success", "배송지가 등록되었습니다.");
            closeModal();
            dataLoad();

        });
    }

    function defaultDelivery(){
          ajaxCall('/common/paging', { 
            table:'users_delivery',
            page:1,
            ppp:99999,
            obj:{user_seq:my_obj.user_seq, default_yn:'Y'}
        }, function(data) {
            console.log('data : ', data);
   
            if(data.totalCount > 0){

                $.each(data.rows, function(i,v){
                    let str = `<tr class="tf-order-item default-item">
                                    <td class="text-center">${1}</td>
                                    <td class="text-center">${v.person}</td>
                                    <td class="text-center">${v.address} ${v.address_detail}</td>
                                    <td class="text-center">${v.phone}</td>
                                    <td class="text-center">
                                        <a href="javascript:openModalDeli(${v.seq})" class="tf-btn tf-btn-small btn-fill animate-hover-btn rounded-0 justify-content-center">
                                            <span>수정</span>
                                        </a>
                                    </td>
                                </tr>`;
                    $('#tbody-users_delivery').append(str);
                })
               
            }

        });
    }

    function setData(seq){
         ajaxCall('/common/paging', { 
            table:'users_delivery',
            page:1,
            ppp:99999,
            obj:{seq:seq}
        }, function(data) {
            console.log('data : ', data);
            let v = data.rows[0];

            $('#modal_name').val(v.person);
            $('#modal_phone').val(v.phone);
            $('#modal_zipcode').val(v.address_postnum);
            $('#modal_address').val(v.address);
            $('#modal_address_detail').val(v.address_detail);

            if(v.default_yn == 'Y'){$('#modal_default').prop('checked', true)};
            $('#insert-btn').attr('data-seq', seq)
           

        });
    }

    function dataLoad(){
        
        ajaxCall('/common/paging', { 
            table:'users_delivery',
            page:1,
            ppp:99999,
            obj:{user_seq:my_obj.user_seq, default_yn:'N'}
        }, function(data) {
            console.log('data : ', data);
            $('#total-count').html(data.totalCount+1);
            $('#tbody-users_delivery').html('');
            if(data.totalCount > 0){
                defaultDelivery();
                let defaultLenth = 0;
                if($('.default-item').length > 0){defaultLenth = 1};
                $.each(data.rows, function(i,v){
                    let str = `<tr class="tf-order-item">
                                    <td class="text-center">${(i+defaultLenth)+1}</td>
                                    <td class="text-center">${v.person}</td>
                                    <td class="text-center">${v.address} ${v.address_detail}</td>
                                    <td class="text-center">${v.phone}</td>
                                    <td class="text-center">
                                        <a href="javascript:openModalDeli(${v.seq})" class="tf-btn tf-btn-small btn-fill animate-hover-btn rounded-0 justify-content-center">
                                            <span>수정</span>
                                        </a>
                                    </td>
                                </tr>`;
                    $('#tbody-users_delivery').append(str);
                })
               
            }else{
                $('#no-data').removeClass('d-none');
            }

        });
    }
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>