<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>


<!-- <div id="common-page-title"></div> -->


<section class="flat-spacing-1">
    <div class="container">

        <div id="list-cate3-wrap" class="pb-4 mb-4 border-bottom d-none"></div>
        <div id="list-attr2-wrap" class="pb-4 mb-4 border-bottom d-none"></div>
        <div id="list-attr3-wrap" class="pb-4 mb-4 border-bottom d-none"></div>

        <div class="tf-shop-control grid-3 align-items-center pb-4 border-bottom">
            <div id="product-count-grid" class="count-text"><span id="product-search-keyword">서치</span> 총 <span class="item-total-count fw-bold"></span> 개</div>
            <ul class="tf-control-layout d-flex justify-content-center">
                <li class="tf-view-layout-switch sw-layout-3" data-value-layout="tf-col-3">
                    <div class="item"><span class="icon icon-grid-3"></span></div>
                </li>
                <li class="tf-view-layout-switch sw-layout-4 active" data-value-layout="tf-col-4">
                    <div class="item"><span class="icon icon-grid-4"></span></div>
                </li>
                <li class="tf-view-layout-switch sw-layout-6" data-value-layout="tf-col-6">
                    <div class="item"><span class="icon icon-grid-6"></span></div>
                </li>
            </ul>
            <div class="tf-control-sorting d-flex justify-content-end">
                <select class="form-select">
                    <option value="n">최신 등록순</option>
                    <option value="o">누적 판매순</option>
                    <option value="p">낮은 가격순</option>
                </select>
            </div>
        </div>

        <div class="no-data tf-page-cart text-center mb_180 d-none">
            <h5 class="mb_24">조회결과가 없어요</h5>
            <p class="mb_24">다른 조건으로 상품을 확인해보세요!</p>
            <a href="/z/product/list" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">상품 전체목록 보기<i class="icon icon-arrow1-top-left"></i></a>
        </div>

        <div class="wrapper-control-shop">
            <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout"></div>
            <div id="paged-wrap"><nav><ul id="paged-content" class="pagination justify-content-center"></ul></nav></div>
        </div>
        
    </div>
</section>

<script>
    var sc1 = '<? echo $_GET["sc1"]; ?>';
    var sc2 = '<? echo $_GET["sc2"]; ?>';
    var sc = '<? echo $_GET["sc"]; ?>';
    var sk = '<? echo $_GET["sk"]; ?>';
    if(sk) insertSearchKeyword(sk);
    var ob = '<? echo $_GET["ob"]; ?>';
    if(!ob) ob = `n`;
    var page = '<? echo $_GET["page"]; ?>';
    if(!page) page = 1;
    var target = '<? echo $_GET["target"]; ?>';
    let menuData2, menuData3, attrData;
    let attr2 = '<? echo $_GET["attr2"]; ?>';
    let attr3 = '<? echo $_GET["attr3"]; ?>';

    $(function() {
        console.log('ㅡ PAGE READY');
        // setPageTitle('상품목록', 'products'); 
        setPageTitleSub();
        setSortOrder();
        setCateWrap();
        productLoad();
    });

    function setAttrWrap(cate2seq){
        console.log(cate2seq);
        // 수전 7 - 1
        // 타일 40 - 2
        // 위생도기 71 - 3
        let parent2;
        if(cate2seq == 7) parent2 = 1;
        else if(cate2seq == 40) parent2 = 2;
        else if(cate2seq == 71) parent2 = 3;
        ajaxCall('/common/all', {table:'attribute', ob:'ORDER BY sort ASC'}, function(data) {
            attrData = data;
            // console.log(data);
            const depth2Items = data.filter(item => item.parent == parent2);
            // console.log(depth2Items);
            const $wrap = $('#list-attr2-wrap').empty();
            $wrap.removeClass('d-none');
            let _name = ``;
            $.each(depth2Items, function(i, v){
                if(v.seq == attr2){
                    if(v.name == '색상') _name = v.name;
                }
                
                const active = (v.seq == attr2) ? 'active' : '';
                const itemStr = `
                    <div class="cate-item ${active} attr2-item attr2-item${v.seq}" onclick="goAttr2('${v.seq}', '${v.name}')">
                        ${v.name}
                    </div>`;
                $wrap.append(itemStr);
            });

            if(attr3){
                goAttr2(attr2, _name);
            }
        });
    }

    function goAttr2(_seq, _name){

        $('.attr2-item').removeClass('active');
        $('.attr2-item'+_seq).addClass('active');

        attr2 = _seq;
        const depth3Items = attrData.filter(item => item.parent == _seq);
        const $wrap = $('#list-attr3-wrap').empty();
        $wrap.removeClass('d-none');
        $.each(depth3Items, function(i, v){
            const active = (v.seq == attr3) ? 'active' : '';
            let imgStr = ``;
            if(_name == '색상'){
                imgStr = `<img src="${v.img}" style="width:20px;">`;
            }
            const itemStr = `
                <div class="cate-item ${active}" onclick="goAttr3('${v.seq}')">
                    ${imgStr}
                    ${v.name}
                </div>`;
            $wrap.append(itemStr);
        });
    }

    function goAttr3(_seq){
        attr3 = _seq;
        page = 1;
        goReload();
    }

    function setCateWrap(){
        if (!sc1) return;
        ajaxCall('/category/menu', {}, function(data) {
            const level2 = (data.find(item => item.seq == sc1) || {}).children || [];
            const level3 = level2.reduce((acc, node) => acc.concat(node.children || []), []);
            const $wrap = $('#list-cate3-wrap').empty();
            if (level3.length === 0) {
                $wrap.addClass('d-none');
            } else {
                $wrap.removeClass('d-none');
                level3.forEach(v => {
                    const active = (v.seq == sc) ? 'active' : '';
                    const itemStr = `
                        <div class="cate-item ${active}" onclick="goCate3('${v.seq}')">
                            ${v.name}
                        </div>`;
                    $wrap.append(itemStr);
                });
            }
        });
    }
    function goCate3(_seq){
        sc = _seq;
        page = 1;
        attr2 = ``;
        attr3 = ``;
        goReload();
    }

    function setSortOrder(){
        $('.tf-control-sorting select').val(ob);
    }

    $('.tf-control-sorting select').change(function(){
        ob = $(this).val();
        page = 1;
        goReload();
    });

    function setPageTitleSub(){
        let page_title_pre = $('#product-search-keyword');
        if(!sc1 && !sk && !target){
            page_title_pre.html('전체');
        }else if(sk){
            page_title_pre.html(`"${sk}" 검색`);
        }else if(sc1){
            let cate = getSeq('category', sc1);
            page_title_pre.html(cate.name);
            // if(sc2){
            //     let cate2 = getSeq('category', sc2);
            //     page_title_pre.html(cate2.name);
                if(sc){
                    let cate3 = getSeq('category', sc);
                    page_title_pre.html(cate3.name);

                    if(cate3.parent == 7 || cate3.parent == 40 || cate3.parent == 71){
                        setAttrWrap(cate3.parent);
                    }
                }
            // }
        }else if(target){
            if(target == 'best'){
                page_title_pre.html('베스트');
            }else if(target == 'new'){
                page_title_pre.html('신상품');
            }
        }
    }

    function productLoad(){
        ajaxCall('/product/list', { 
            ppp: DEFAULT_PPP,
            page, sc, c1_seq:sc1, c2_seq:sc2, sk, ob, target, attr2, attr3
        }, function(data) {
            console.log(data);
            $('.item-total-count').html(data.totalCount);
            if(data.totalCount == 0){
                $('.no-data').removeClass('d-none');
            }else{
                $('.tf-shop-control').removeClass('d-none');
                drawPaging(data.totalCount, data.totalPage);
                $.each(data.rows, function(i, v){
                    itemDraw(v);
                });
            }
        });
    }

    function itemDraw(v){
        $('#gridLayout').append(makeProductItemStr(v));
    }

    function goReload(){
        location.href = `/z/product/list?page=${page}&sc1=${sc1}&sc2=${sc2}&sc=${sc}&sk=${sk}&ob=${ob}&target=${target}&attr2=${attr2}&attr3=${attr3}`;
    }

    document.addEventListener('DOMContentLoaded', function () {
        const layoutSwitchItems = document.querySelectorAll('.tf-view-layout-switch');
        const savedLayout = localStorage.getItem('selectedLayout');

        // 저장된 레이아웃이 있을 경우 적용
        if (savedLayout) {
            layoutSwitchItems.forEach(item => {
                if (item.getAttribute('data-value-layout') === savedLayout) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });
        }

        // 클릭 이벤트 설정
        layoutSwitchItems.forEach(item => {
            item.addEventListener('click', function () {
                layoutSwitchItems.forEach(el => el.classList.remove('active'));
                this.classList.add('active');

                // 선택된 layout 값을 로컬스토리지에 저장
                const selectedLayout = this.getAttribute('data-value-layout');
                localStorage.setItem('selectedLayout', selectedLayout);
            });
        });
    });
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>