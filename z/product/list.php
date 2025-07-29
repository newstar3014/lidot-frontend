<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<style>
    .attr-choice-item{
        display: inline-block;
        background: slategray;
        color: white;
        margin-right: 10px;
        padding: 5px 10px;
        border-radius: 50px;
        margin-bottom: 10px;
    }
    .attr-choice-item .btn-remove{
        cursor: pointer;
    }
</style>

<!-- <div id="common-page-title"></div> -->


<section class="flat-spacing-1">
    <div class="container">

        <div id="list-cate-next-wrap"></div>
        <div id="list-attr2-wrap" class="pb-4 mb-4 border-bottom d-none"></div>
        <div id="list-attr3-wrap" class="pb-4 mb-4 border-bottom d-none"></div>
        <div class="mb-3"><ul id="list-attr4-wrap"></div>

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
    var c_seq = '<?php echo $_GET["c_seq"]; ?>';
    var sk = '<? echo $_GET["sk"]; ?>';
    if(sk) insertSearchKeyword(sk);
    var ob = '<? echo $_GET["ob"]; ?>';
    if(!ob) ob = `n`;
    var page = '<? echo $_GET["page"]; ?>';
    if(!page) page = 1;
    var target = '<? echo $_GET["target"]; ?>';
    let attrData;
    // let attr2 = '<? echo $_GET["attr2"]; ?>';
    // let attr3 = '<? echo $_GET["attr3"]; ?>';
    let attr2 = '';
    let attr3 = '';
    let attrArr = [];
    let firstBoolean = true;

//     let attr3 = ``;
//    let attrArr = [];

    // let menuData;
    // ajaxCall('/category/menu', {}, function(data) {
    //     menuData = data;
    // });

    $(function() {
        console.log('ㅡ PAGE READY');
        // setPageTitle('상품목록', 'products');
        // setPageTitleSub();
        // setSortOrder();
        // setCateWrap();
        // productLoad();



        goReload();

    });

    function setAttrWrap(cate2seq){
        console.log('setAttrWrap()');
        console.log(cate2seq);
        // 수전 7 - 1
        // 타일 40 - 2
        // 위생도기 71 - 3
        let parent2;
        if(cate2seq == 7) parent2 = 1;
        else if(cate2seq == 40) parent2 = 2;
        else if(cate2seq == 71) parent2 = 3;

        const $wrap = $('#list-attr2-wrap').empty().addClass('d-none');

        ajaxCall('/common/all', {table:'attribute', ob:'ORDER BY sort ASC'}, function(data) {
            attrData = data;

            const depth2Items = data.filter(item => item.parent == parent2);
            if(depth2Items.length > 0){
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
            }
            
        });
    }


    function goAttr2(_seq, _name){

        if(!_seq){
            $('.attr2-item').removeClass('active');
            $('#list-attr3-wrap').html('');
            $('#list-attr3-wrap').addClass('d-none');
            return false;
        }
        

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
                <div class="cate-item goAttr3Click" id="goAttr3-${v.seq}" data-attr_seq="${v.seq}" data-attr_name="${v.name}">
                    ${imgStr}
                    ${v.name}
                </div>`;
            $wrap.append(itemStr);
        });
    }

    $(document).on('click', '.goAttr3Click', function(){
        page = 1;
        let attr_seq = $(this).attr('data-attr_seq');
        let attr_name = $(this).attr('data-attr_name');
        let id = $(`#li-${attr_seq}`).attr('id');
        if(!id) goDrawLiFn(attr_seq, attr_name, true);
    });

    function goDrawLiFn(attr_seq, attr_name, arrBoolean){

        if(arrBoolean) attrArr.push(attr_seq);

        attr3 = attrArr;

        let str = `<li id="li-${attr_seq}" class="attr-choice-item">
                        ${attr_name}
                        <span class="btn-remove" onclick="goRemoveLiFn('${attr_seq}')">X</span>
                    </li>`;

        $('#list-attr4-wrap').append(str);
//        if(!firstBoolean) goReload();

        goReload();
    }

    function goRemoveLiFn(attr_seq, attr_name){
        let index = attrArr.indexOf(attr_seq.toString());
        if (index !== -1)  attrArr.splice(index, 1); // 해당 인덱스에서 1개 항목을 삭제
        attr3 = attrArr;
        $(`#li-${attr_seq}`).remove();
        goReload();
    }

    // function goAttr3(_seq, _name){

    //     if(attrArr.length == 0){
    //         attrArr.push(_seq);
    //         return testFn(_name);
    //     }else{

    //         for(let i = 0; i < attrArr.length; i++){
    //             let v = attrArr[i];
    //             if(v == _seq) return testFn(``);
    //         }

    //         attrArr.push(_seq);
    //         return testFn(_name);
    //     }        
    // }

    function setCateWrap() {
        if (!c_seq) return;

        ajaxCall('/category/menu', {}, function(data) {
            // 재귀적으로 c_seq에 해당하는 항목을 찾아 하위 children 반환
            const findChildren = (list, targetSeq) => {
                for (const item of list) {
                    if (item.seq == targetSeq) return item.children || [];
                    if (item.children?.length) {
                        const found = findChildren(item.children, targetSeq);
                        if (found) return found;
                    }
                }
                return [];
            };

            const children = findChildren(data, c_seq); // 선택된 카테고리의 하위 목록
            const $wrap = $('#list-cate2-wrap').empty();

            if (children.length === 0) {
                $wrap.addClass('d-none');
            } else {
                $wrap.removeClass('d-none');
                children.forEach(v => {
                    const active = v.seq == c_seq ? 'active' : '';
                    const itemStr = `
                        <div class="cate-item ${active}" onclick="goCate('${v.seq}')">
                            ${v.name}
                        </div>`;
                    $wrap.append(itemStr);
                });
            }
        });
    }


    function goCate(_seq) {
        // 상태 초기화
        sc = '';          // 최종선택된 c_seq는 아래에서 다시 설정됨
        attr2 = ``;
        attr3 = ``;
        attrArr = [];
        page = 1;

        $('#list-attr3-wrap').empty().addClass('d-none');
        $('#list-attr4-wrap').empty();
        $('#list-attr2-wrap').empty().addClass('d-none');

        // 메뉴 트리에서 _seq에 해당하는 항목 찾기
        const findNodeBySeq = (list, targetSeq) => {
            for (const item of list) {
                if (item.seq == targetSeq) return item;
                if (item.children?.length) {
                    const found = findNodeBySeq(item.children, targetSeq);
                    if (found) return found;
                }
            }
            return null;
        };

        console.log('goCate()');
        
        console.log(menuData);
        

        const node = findNodeBySeq(menuData, _seq);
        if (!node) return;

        // 현재 선택된 c_seq 업데이트
        sc = node.seq;

        // 특성 표시 처리 (2depth에서만 체크하고 싶다면 depth 조건 추가 가능)
        if (['7', '40', '71'].includes(String(sc))) {
            setAttrWrap(sc);
        }

        // 하위 카테고리가 있으면 렌더링
        const $nextWrap = $('#list-cate-next-wrap').empty(); // 예시용, 다음 카테고리 wrap
        if (node.children?.length) {
            node.children.forEach(v => {
                const itemStr = `
                    <div class="cate-item" onclick="goCate('${v.seq}')">
                        ${v.name}
                    </div>`;
                $nextWrap.append(itemStr);
            });
            $nextWrap.removeClass('d-none');
        } else {
            $nextWrap.addClass('d-none');
        }

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

    function setPageTitleSub() {
        let page_title_pre = $('#product-search-keyword');

        if (!c_seq && !sk && !target) {
            page_title_pre.html('전체');
            return;
        }

        // 키워드 검색
        if (sk) {
            page_title_pre.html(`"${sk}" 검색`);
            return;
        }

        // 카테고리 기반
        if (c_seq) {
            const cate = getSeq('category', c_seq);
            if (cate && cate.name) {
                page_title_pre.html(cate.name);
            } else {
                page_title_pre.html('카테고리');
            }

            // c_seq가 depth 2일 경우에만 특성 적용
            if (cate && cate.depth == 2) {
                if (['7', '40', '71'].includes(String(c_seq))) {
                    console.log('특성 있음');
                    setAttrWrap(c_seq);
                } else {
                    console.log('특성 없음');
                    $('#list-attr2-wrap').empty().addClass('d-none');
                }
            } else {
                // depth 2가 아니면 특성 검사 자체를 하지 않음
                $('#list-attr2-wrap').empty().addClass('d-none');
            }

            return;
        }

        // 베스트 / 신상품
        if (target) {
            if (target === 'best') {
                page_title_pre.html('베스트');
            } else if (target === 'new') {
                page_title_pre.html('신상품');
            }
        }
    }

    function productLoad(){
        $('#gridLayout').html(``);

        let url = `/product/list`;

        // ✅ c_seq가 40 또는 7의 하위인지 검사
        if (isDescendantCategory('40') || isDescendantCategory('7')) {
            url = `/product/list-option`;
        }

        ajaxCall(url, { 
            ppp: DEFAULT_PPP,
            page, c_seq, sk, ob, target, attr2, attr3
        }, function(data) {
            console.log("CHECK OPTION DATA : ", data);
            $('.item-total-count').html(data.totalCount);
            if(data.totalCount == 0){
                $('.no-data').removeClass('d-none');
            }else{
                $('.no-data').addClass('d-none');
                $('.tf-shop-control').removeClass('d-none');
                drawPaging(data.totalCount, data.totalPage);
                $.each(data.rows, function(i, v){
                    itemDraw(v);
                });
            }
        });
    }

    function itemDraw(v){
        if (isDescendantCategory('40') || isDescendantCategory('7')) {
            $('#gridLayout').append(makeProductItemStr(v, true));
        } else {
            $('#gridLayout').append(makeProductItemStr(v));
        }
    }


    function goReload(){

        /* URL세팅(페이지 새로고침 안 됨) */
        history.pushState(null, null, `/z/product/list?page=${page}&c_seq=${c_seq}&sk=${sk}&ob=${ob}&target=${target}&attr2=${attr2}`);

        setPageTitleSub();
        setSortOrder();
        setCateWrap();
        productLoad();

        if (c_seq) {
            goCate(c_seq); // 최초 URL에서 진입한 카테고리도 goCate 실행
        }
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