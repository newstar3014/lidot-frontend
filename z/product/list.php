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

        <div id="category-select-wrap"></div>
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
// ✅ 전역 변수
let attrData = [];
let attrArr = [];
let c_seq = '';
let page = 1, sk = '', ob = 'n', target = '';

$(function () {
    renderCategorySelector(1, 0); // depth 1부터 시작
    goReload();
});


// ✅ 카테고리 렌더링
function renderCategorySelector(depth, parentSeq) {
    const $wrap = $('#category-select-wrap');

    // ❌ jQuery는 [data-depth>=] 를 직접 지원하지 않음 → filter로 처리
    $wrap.find('.category-select-box').filter(function () {
        return parseInt($(this).attr('data-depth')) >= depth;
    }).remove();

    const list = getCategoryList(depth, parentSeq);
    if (list.length === 0) return;

    const $select = $('<select>')
        .addClass('form-select category-select-box')
        .attr('data-depth', depth)
        .attr('id', `c_seq_${depth}`);

    $select.append(`<option value=''>선택</option>`);
    list.forEach(item => {
        $select.append(`<option value='${item.seq}' data-cate_name='${item.name}'>${item.name}</option>`);
    });

    $wrap.append($select);
}


// ✅ 카테고리 변경 시
$(document).on('change', '.category-select-box', function () {
    const depth = parseInt($(this).data('depth'));
    const selectedSeq = $(this).val();

    c_seq = selectedSeq;
    renderCategorySelector(depth + 1, selectedSeq);
    setAttrWrap();
    goReload();
});

// ✅ 카테고리 리스트 필터링
function getCategoryList(depth, parent) {
    return menuData.filter(item => item.depth == depth && item.parent == parent);
}

// ✅ 속성 래핑
function setAttrWrap() {
    const showAttr = isDescendantCategory('7') || isDescendantCategory('40') || isDescendantCategory('71');
    const $wrap = $('#list-attr2-wrap').empty();

    if (!showAttr) return;

    ajaxCall('/common/all', { table: 'attribute', ob: 'ORDER BY sort ASC' }, function (data) {
        attrData = data;
        let parent2 = '';
        if (isDescendantCategory('7')) parent2 = 1;
        else if (isDescendantCategory('40')) parent2 = 2;
        else if (isDescendantCategory('71')) parent2 = 3;

        const depth2Items = attrData.filter(item => item.parent == parent2);
        if (depth2Items.length > 0) {
            $wrap.removeClass('d-none');
            depth2Items.forEach(v => {
                $wrap.append(`<div class="cate-item attr2-item attr2-item${v.seq}" onclick="goAttr2('${v.seq}', '${v.name}')">${v.name}</div>`);
            });
        }
    });
}

function goAttr2(_seq, _name) {
    const $wrap = $('#list-attr3-wrap').empty();
    $wrap.removeClass('d-none');

    const depth3Items = attrData.filter(item => item.parent == _seq);
    depth3Items.forEach(v => {
        const imgStr = (_name == '색상') ? `<img src='${v.img}' width='20'> ` : '';
        const itemStr = `<div class="cate-item goAttr3Click" data-attr_seq="${v.seq}" data-attr_name="${v.name}">${imgStr}${v.name}</div>`;
        $wrap.append(itemStr);
    });
}

$(document).on('click', '.goAttr3Click', function () {
    const attr_seq = $(this).data('attr_seq');
    const attr_name = $(this).data('attr_name');
    if (!attrArr.includes(attr_seq)) {
        attrArr.push(attr_seq);
        $('#list-attr4-wrap').append(`<li id="li-${attr_seq}" class="attr-choice-item">${attr_name}<span class="btn-remove" onclick="goRemoveLiFn('${attr_seq}')">X</span></li>`);
        goReload();
    }
});

function goRemoveLiFn(attr_seq) {
    attrArr = attrArr.filter(v => v != attr_seq);
    $(`#li-${attr_seq}`).remove();
    goReload();
}

// ✅ 하위포함 체크
function isDescendantCategory(targetSeq) {
    const find = (list) => {
        for (const item of list) {
            if (item.seq == targetSeq) return true;
            if (item.children?.length && find(item.children)) return true;
        }
        return false;
    };

    const node = findNode(menuData, c_seq);
    if (!node) return false;
    return find([node]);
}

function findNode(list, seq) {
    for (const item of list) {
        if (item.seq == seq) return item;
        if (item.children?.length) {
            const found = findNode(item.children, seq);
            if (found) return found;
        }
    }
    return null;
}

// ✅ 상품 로딩
function productLoad() {
    $('#gridLayout').empty();
    let url = `/product/list`;
    if (isDescendantCategory('40') || isDescendantCategory('7')) {
        url = `/product/list-option`;
    }

    ajaxCall(url, { ppp: 20, page, c_seq, sk, ob, target, attr2: '', attr3: attrArr }, function (data) {
        $('.item-total-count').html(data.totalCount);
        if (data.totalCount === 0) {
            $('.no-data').removeClass('d-none');
        } else {
            $('.no-data').addClass('d-none');
            data.rows.forEach(v => itemDraw(v));
        }
    });
}

function itemDraw(v) {
    const special = isDescendantCategory('40') || isDescendantCategory('7');
    $('#gridLayout').append(makeProductItemStr(v, special));
}

function goReload() {
    history.pushState(null, null, `/z/product/list?page=${page}&c_seq=${c_seq}&sk=${sk}&ob=${ob}&target=${target}`);
    productLoad();
}

</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>