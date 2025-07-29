<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>
<style>
.card-gallery {
    border: none;
    overflow: hidden;
    transition: transform 0.2s;
}
.card-gallery:hover {
    transform: scale(1.02);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.card-gallery img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
}
.text-box {
    padding: 8px;
}
.text-box .title {
    font-weight: 600;
    font-size: 1.05rem;
    margin-bottom: 4px;
}
.text-box .date {
    color: #888;
    font-size: 0.9rem;
}
</style>

<section class="flat-spacing-1">
    <div class="container">

        <div class="tf-shop-control grid-3 align-items-center pb-4 border-bottom">
            <div id="product-count-grid" class="count-text"><span id="product-search-keyword">PROJECT</span> 총 <span class="item-total-count fw-bold"></span> 개</div>
        </div>

        <div class="no-data tf-page-cart text-center mb_180 d-none">
            <h5 class="mb_24">조회결과가 없어요</h5>
            <!-- <p class="mb_24">다른 조건으로  확인해보세요!</p> -->
            <a href="/z/project" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">전체목록 보기<i class="icon icon-arrow1-top-left"></i></a>
        </div>


        <div class="wrapper-control-shop">
            <div class="row wrapper-shop" id="gridLayout"></div>
            <div id="paged-wrap"><nav><ul id="paged-content" class="pagination justify-content-center"></ul></nav></div>
        </div>
        
    </div>
</section>



<script type="text/javascript">


    let ppp = 10;
    let page = '<?php echo $_GET['page'];?>';
    if(!page) page = 1;
    $(function() {
        console.log('ㅡ PAGE READY');
        dataLoad();
    });

    function dataLoad(){

        ajaxCall('/common/paging', { 
            table: 'project',
            page,
            ppp,
            rdt:1,
            obj:{show_yn:'Y'}
        }, function(data) {
            //data = data.filter(v => v.rdt == null);
            console.log('data : ', data);
            

             $('.item-total-count').html(data.totalCount);
            if(data.totalCount == 0){
                $('.no-data').removeClass('d-none');
            }else{
                $('.no-data').addClass('d-none');
               
                renderList(data.rows);
                drawPaging(data.totalCount, data.totalPage);
            }
        });

        function renderList(data) {
            let html = '';
            data.forEach(item => {
                const imgList = JSON.parse(item.img || '[]');
                const imgUrl = imgList.length ? imgList[0].url : 'https://via.placeholder.com/400x200?text=No+Image';
                html += `
                <div class="col-md-6 col-lg-4 p-2">
                    <div class="card-gallery" onclick="goDetail(${item.seq});">
                        <img src="${imgUrl}">
                        <div class="text-box">
                            <div class="title">${item.title}</div>
                            <div class="date">${item.idt.split(' ')[0]}</div>
                        </div>
                    </div>
                </div>`;
            });
            $('#gridLayout').html(html);
        }


    }

    function goDetail(seq){
        location.href = `/z/project/detail?seq=${seq}`;
    }

    function goReload(){
        location.href = `/z/project?page=${page}`;
    }

</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>