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

        <div id="list-cate2-wrap" class="pb-4 mb-4 border-bottom d-none"></div>
        <div id="list-cate3-wrap" class="pb-4 mb-4 border-bottom d-none"></div>
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
// 전역 변수
let c_seq = getUrlParam('c_seq') || '';
let category = []; // depth 순서대로 담김
// ✅ 전역 menuData는 서버 사이드에서 window.menuData로 주입됨 (중복 선언 제거)
let attr2 = '';
let attr3 = '';
let attrArr = [];
let page = getUrlParam('page') || 1;
let sk = getUrlParam('sk') || '';
let ob = getUrlParam('ob') || 'n';
let target = getUrlParam('target') || '';

$(function () {
    // category는 서버 응답에서 세팅되며, 렌더링 및 속성조건도 이후 실행됨
    setSortOrder();
    productLoad();
});

function getUrlParam(key) {
    const url = new URL(window.location.href);
    return url.searchParams.get(key);
}

// 제거됨: category는 서버 응답에서 내려오므로 클라이언트 구성 함수 불필요

// menuData 트리 구조에서 특정 부모 seq의 자식들 반환
function getChildrenByParent(seq, data = menuData) {
    for (const item of data) {
        if (item.seq == seq) return item.children || [];
        if (item.children && item.children.length) {
            const result = getChildrenByParent(seq, item.children);
            if (result.length) return result;
        }
    }
    return [];
}

// 주어진 카테고리 seq 기준으로 옵션 상품 여부 판별 (depth:2가 7 또는 40인지)
function isOptionCategoryBySeq(seq) {
    const trail = getCategoryTrailFromSeq(seq);
    const depth2 = trail.find(c => c.depth === 2);
    return [7, 40].includes(depth2?.seq);
}

// 현재 선택된 c_seq 기준 옵션 상품 여부 판단
function isOptionCategory() {
    return isOptionCategoryBySeq(c_seq);
}

function renderCategorySelectors() {
    const $wrap = $('#category-select-wrap');
    $wrap.empty();

    // depth:2 이상만 그리기
    category.filter(c => c.depth >= 2).forEach(cat => {
        const siblings = getChildrenByParent(cat.parent);
        const box = $('<div class="category-select-box pb-4 mb-4 border-bottom">').attr('data-depth', cat.depth);

        siblings.forEach(item => {
            const active = item.seq === cat.seq ? 'active' : '';
            const el = $(`<div class="cate-item ${active}" data-seq="${item.seq}" data-depth="${item.depth}">${item.name}</div>`);
            el.click(() => onCategoryClick(item));
            box.append(el);
        });

        $wrap.append(box);
    });

    // 마지막 선택된 카테고리의 자식이 있다면 다음 뎁스 생성
    const last = category[category.length - 1];
    const next = getChildrenByParent(last.seq);
    if (next.length) {
        const box = $('<div class="category-select-box pb-4 mb-4 border-bottom">').attr('data-depth', last.depth + 1);
        next.forEach(item => {
            const el = $(`<div class="cate-item" data-seq="${item.seq}" data-depth="${item.depth}">${item.name}</div>`);
            el.click(() => onCategoryClick(item));
            box.append(el);
        });
        $wrap.append(box);
    }
}

function onCategoryClick(item) {
    // 선택된 뎁스 이후 카테고리 제거
    category = category.filter(c => c.depth < item.depth);
    category.push(item);
    c_seq = item.seq;
    attr2 = '';
    attr3 = '';
    attrArr = [];
    page = 1;
    renderCategorySelectors();
    setAttrCondition();
    goReload();
}

function setAttrCondition() {
    const depth2 = category.find(c => c.depth === 2);
    if ([7, 40, 71].includes(depth2?.seq)) {
        setAttrWrap(depth2.seq);
    } else {
        $('#list-attr2-wrap').empty().addClass('d-none');
    }
}

function goReload() {
    history.pushState(null, null, `/z/product/list?c_seq=${c_seq}&sk=${sk}&ob=${ob}&page=${page}`);
    productLoad();
}

function setSortOrder() {
    $('.tf-control-sorting select').val(ob);
    $('.tf-control-sorting select').change(function () {
        ob = $(this).val();
        page = 1;
        goReload();
    });
}

function productLoad() {
    $('#gridLayout').html('');
    let url = isOptionCategory() ? '/product/list-option' : '/product/list';
    ajaxCall(url, {
        c_seq, page, sk, ob, target, attr2, attr3
    }, function (data) {
        $('.item-total-count').html(data.totalCount);
        if (data.totalCount == 0) {
            $('.no-data').removeClass('d-none');
        } else {
            $('.no-data').addClass('d-none');
            $('.tf-shop-control').removeClass('d-none');
            drawPaging(data.totalCount, data.totalPage);
            data.rows.forEach(v => itemDraw(v));
        }
    });
}

function itemDraw(v) {
    const isOptionList = isOptionCategoryBySeq(v.c_seq);
    $('#gridLayout').append(makeProductItemStr(v, isOptionList));
}

// attr 관련 함수

function setAttrWrap(cate2seq) {
    const $wrap = $('#list-attr2-wrap').empty().addClass('d-none');
    ajaxCall('/common/all', { table: 'attribute', ob: 'ORDER BY sort ASC' }, function (data) {
        attrData = data;
        const depth2Items = data.filter(item => item.parent == cate2seq);
        if (depth2Items.length > 0) {
            $wrap.removeClass('d-none');
            let _name = '';
            $.each(depth2Items, function (i, v) {
                if (v.seq == attr2) {
                    if (v.name == '색상') _name = v.name;
                }
                const active = (v.seq == attr2) ? 'active' : '';
                const itemStr = `
                    <div class="cate-item ${active} attr2-item attr2-item${v.seq}" onclick="goAttr2('${v.seq}', '${v.name}')">
                        ${v.name}
                    </div>`;
                $wrap.append(itemStr);
            });

            if (attr3) {
                goAttr2(attr2, _name);
            }
        }
    });
}

function goAttr2(_seq, _name) {
    if (!_seq) {
        $('.attr2-item').removeClass('active');
        $('#list-attr3-wrap').html('').addClass('d-none');
        return false;
    }

    $('.attr2-item').removeClass('active');
    $('.attr2-item' + _seq).addClass('active');
    attr2 = _seq;
    const depth3Items = attrData.filter(item => item.parent == _seq);
    const $wrap = $('#list-attr3-wrap').empty();
    $wrap.removeClass('d-none');
    $.each(depth3Items, function (i, v) {
        const active = (v.seq == attr3) ? 'active' : '';
        let imgStr = '';
        if (_name == '색상') {
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

$(document).on('click', '.goAttr3Click', function () {
    page = 1;
    let attr_seq = $(this).attr('data-attr_seq');
    let attr_name = $(this).attr('data-attr_name');
    let id = $(`#li-${attr_seq}`).attr('id');
    if (!id) goDrawLiFn(attr_seq, attr_name, true);
});

function goDrawLiFn(attr_seq, attr_name, arrBoolean) {
    if (arrBoolean) attrArr.push(attr_seq);
    attr3 = attrArr;
    let str = `<li id="li-${attr_seq}" class="attr-choice-item">
                    ${attr_name}
                    <span class="btn-remove" onclick="goRemoveLiFn('${attr_seq}')">X</span>
                </li>`;
    $('#list-attr4-wrap').append(str);
    goReload();
}

function goRemoveLiFn(attr_seq) {
    let index = attrArr.indexOf(attr_seq.toString());
    if (index !== -1) attrArr.splice(index, 1);
    attr3 = attrArr;
    $(`#li-${attr_seq}`).remove();
    goReload();
}


</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>