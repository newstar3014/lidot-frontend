<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<div id="common-page-title"></div>

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="row">
            <? include_once '_nav.php'; ?>
            <div class="col-lg-12">
                <div class="my-account-content account-order">
                    <div class="d-flex justify-content-between mb-3">
                        <span>총 <span id="total-count"></span>건</span>
                        <!-- <span class="tf-btn tf-btn-small btn-fill animate-hover-btn rounded-0 justify-content-center" onclick="openModalDeli(0)">신규 등록</span> -->
                    </div>
                    <div class="wrap-account-order">
                        <table>
                            <thead>
                                <tr>
                                    <th class="fw-6 text-center" style="width:10%;">No.</th>
                                    <th class="fw-6 text-center">제목</th>
                                    <th class="fw-6 text-center" style="width:15%;">등록일시</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-notice"></tbody>
                        </table>

                        <div id="no-data" class="py-3 text-center d-none">
                            <i class="bi bi-info-circle"></i><br>
                            조회되는 데이터가 없습니다.
                        </div>

                        <div class="wrapper-control-shop">
                            <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout"></div>
                            <div id="paged-wrap"><nav><ul id="paged-content" class="pagination justify-content-center"></ul></nav></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->

<script>
    let page = '<? echo $_GET["page"]; ?>';
    if(!page) page = 1;

    $(function() {
        setPageTitle('공지사항', 'notice');
        dataLoad();
    });

    function dataLoad(){
        
        ajaxCall('/etc/noticeList', {
            page,
            ppp:10,
            obj:{type : `U`}
        }, function(data) {

            console.log('data : ', data);

            $('#total-count').html(data.totalCount);
            $('#tbody-notice').html('');

            if(data.totalCount > 0){
                
                $.each(data.rows, function(i,v){

                    let str = `<tr class="tf-order-item" onclick="location.href='/z/notice/detail?n_seq=${v.seq}';">
                                    <td class="text-center">${v.row_num || `<span class="fw-bold">공지</span>`}</td>
                                    <td class="text-center">${v.title}</td>
                                    <td class="text-center">${v.idt.substr(0,10)}</td>
                                </tr>`;
                    $('#tbody-notice').append(str);
                })
                drawPaging(data.totalCount, data.totalPage);
            }else{
                $('#no-data').removeClass('d-none');
            }

        });
    }

    function goReload(){
        location.href = `/z/notice/list?page=${page}`;
    }

</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>