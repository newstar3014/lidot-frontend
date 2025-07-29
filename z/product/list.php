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

        <!-- 카테고리 리스트 전체 감싸는 영역 -->
        <div id="list-cate-wrap"></div>

        <!-- 최종 선택된 카테고리 seq 저장용 -->
        <input type="hidden" id="c_seq" value="">

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
    var c_seq = '<? echo $_GET["c_seq"]; ?>';
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

    // function setCateWrap(){
    //     if (!c_seq) return;
    //     const level2 = (data.find(item => item.seq == sc1 && item.show_yn === 'Y') || {}).children || [];
    //     menuData = level2;
    //     const $wrap2 = $('#list-cate2-wrap').empty();
    //     if (level2.length === 0) {
    //         $wrap2.addClass('d-none');
    //     } else {
    //         $wrap2.removeClass('d-none');
    //         level2.forEach(v => {
    //             const active = (v.seq == sc2) ? 'active' : '';
    //             const itemStr = `
    //                 <div class="cate-item ${active}" onclick="goCate2('${v.seq}')">
    //                     ${v.name}
    //                 </div>`;
    //             $wrap2.append(itemStr);
    //         });
    //     }
    // }

    // function goCate2(_seq){

    //     sc = '';
    //     sc2 = _seq;
    //     page = 1;
    //     attr2 = ``;
    //     attr3 = ``;
    //     attrArr = [];
    //     $('#list-attr3-wrap').empty().addClass('d-none');
    //     $('#list-attr4-wrap').empty();
    //     // if(attrArr.length > 0){
    //     //     attr3 = attrArr;
    //     // }else{
    //     //     attr3 = ``;
    //     // }

    //     const level3 = (menuData.find(item => item.seq == sc2 && item.show_yn === 'Y') || {}).children || [];
    //     const $wrap3 = $('#list-cate3-wrap').empty();
    //     if (level3.length === 0) {
    //         $wrap3.addClass('d-none');
    //     } else {
    //         $wrap3.removeClass('d-none');
    //         level3.forEach(v => {
    //             const active = (v.seq == sc) ? 'active' : '';
    //             const itemStr = `
    //                 <div class="cate-item ${active} cate3-item cate-item${v.seq}" onclick="goCate3('${v.seq}')">
    //                     ${v.name}
    //                 </div>`;
    //             $wrap3.append(itemStr);
    //         });
    //     }

    //     if(sc2 == 7 || sc2 == 40 || sc2 == 71){
    //         setAttrWrap(sc2);
    //     }else{
    //         $('#list-attr2-wrap').empty().addClass('d-none');
    //     }


 
    //     goReload();
    // }


    // ✅ 특정 seq의 카테고리 항목 찾기 (재귀 탐색)
    function findCategoryBySeq(seq, list) {
        for (const item of list) {
            if (item.seq == seq) return item;
            if (item.children && item.children.length > 0) {
                const found = findCategoryBySeq(seq, item.children);
                if (found) return found;
            }
        }
        return null;
    }

    // ✅ 특정 depth의 카테고리 wrap 렌더링
    function renderCategoryWrap(depth, list, activeSeq) {
        const wrapId = `list-cate-depth${depth}`;
        let $wrap = $(`#${wrapId}`);

        // 없으면 새로 생성
        if ($wrap.length === 0) {
            $wrap = $(`<div id="${wrapId}" class="list-cate-wrap pb-3 mb-4 border-bottom" data-depth="${depth}"></div>`);
            $('#list-cate-wrap').append($wrap);
        }

        $wrap.empty();

        list.forEach(item => {
            const isActive = (item.seq == activeSeq) ? 'active' : '';
            const itemHtml = `
                <div class="cate-item ${isActive}" onclick="goCate(${item.seq})" data-depth="${depth}">
                    ${item.name}
                </div>
            `;
            $wrap.append(itemHtml);
        });
    }

    // ✅ 카테고리 클릭 시
    function goCate(seq) {
        const current = findCategoryBySeq(seq, menuData);
        if (!current) return;

        const depth = current.depth;

        // 하위 뎁스 이상은 모두 제거
        $(`#list-cate-wrap .list-cate-wrap`).each(function () {
            const d = parseInt($(this).data('depth'), 10);
            if (d > depth) $(this).remove();
        });

        // 현재 depth 형제 리스트
        const siblings = (findCategoryBySeq(current.parent, menuData) || {}).children || [];
        renderCategoryWrap(depth, siblings, current.seq);

        // 자식이 있다면 다음 뎁스 추가
        if (current.children && current.children.length > 0) {
            renderCategoryWrap(depth + 1, current.children, null);
        }

        // 선택된 카테고리 업데이트
        $('#c_seq').val(current.seq);
        c_seq = current.seq;

        // 속성 필터 조건 처리
        if (current.seq == 7 || current.seq == 40 || current.seq == 71) {
            setAttrWrap(current.seq);
        } else {
            $('#list-attr2-wrap').empty().addClass('d-none');
        }

        // 데이터 다시 불러오기
        goReload();
    }

    // ✅ 초기 진입 시 c_seq 경로 재구성 및 렌더링
    function initCategoryPath(c_seq) {
        if (!c_seq) return;

        const current = findCategoryBySeq(c_seq, menuData);
        if (!current) return;

        const path = [];

        let node = current;
        while (node && node.depth >= 2) {
            path.unshift(node); // 상위부터 앞에 넣기
            node = findCategoryBySeq(node.parent, menuData);
        }

        $('#list-cate-wrap').empty();

        path.forEach(cat => {
            const siblings = (findCategoryBySeq(cat.parent, menuData) || {}).children || [];
            renderCategoryWrap(cat.depth, siblings, cat.seq);
        });

        if (current.children && current.children.length > 0) {
            renderCategoryWrap(current.depth + 1, current.children, null);
        }

        $('#c_seq').val(current.seq);
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
        const $title = $('#product-search-keyword');
        if ($title.length === 0) return;

        if (!c_seq && !sk && !target) {
            $title.html('전체');
            return;
        }

        if (sk) {
            $title.html(`"${sk}" 검색`);
            return;
        }

        if (target) {
            const targetMap = {
                best: '베스트',
                new: '신상품',
            };
            $title.html(targetMap[target] || '전체');
            return;
        }

        const current = findCategoryBySeq(c_seq, menuData);
        if (!current) {
            $title.html('전체');
            return;
        }

        const path = [];
        let node = current;
        while (node && node.depth >= 1) {
            path.unshift(node);
            node = findCategoryBySeq(node.parent, menuData);
        }

        const titleText = path.map(cat => cat.name).join(' > ');
        $title.html(titleText);

        const depth2Node = path.find(cat => cat.depth === 2);
        if (depth2Node && attrProductTargetArr.includes(Number(depth2Node.seq))) {
            setAttrWrap(depth2Node.seq);
        } else {
            $('#list-attr2-wrap').empty().addClass('d-none');
        }
    }



    function productLoad(){

        $('#gridLayout').html(``);

        let url = `/product/list`;
        if (isOptionCategory(c_seq, attrOptionTargetArr)) {
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

    function itemDraw(v) {
        const isOption = isOptionCategory(c_seq, attrOptionTargetArr);
        $('#gridLayout').append(makeProductItemStr(v, isOption));
    }

    function goReload(){

        /* URL세팅(페이지 새로고침 안 됨) */
        history.pushState(null, null, `/z/product/list?page=${page}&c_seq=${c_seq}&sk=${sk}&ob=${ob}&target=${target}&attr2=${attr2}`);

        setPageTitleSub();
        setSortOrder();
        // setCateWrap();
        initCategoryPath(c_seq);
        productLoad();

        // if(firstBoolean && attrArr.length > 0){

        //     for(let i = 0; i < attrArr.length; i++){
        //         let v = attrArr[i];
        //         let attrName = $(`#goAttr3-${v}`).attr('data-attr_name');
        //         goDrawLiFn(v, attrName, false);
        //     }

        //     productLoad();

        //     firstBoolean = false;
        // }
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