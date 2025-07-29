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
var c_seq = '<?php echo $_GET["c_seq"] ?? ""; ?>';
var sk = '<?php echo $_GET["sk"] ?? ""; ?>';
if(sk) insertSearchKeyword(sk);
var ob = '<?php echo $_GET["ob"] ?? "n"; ?>';
var page = '<?php echo $_GET["page"] ?? 1; ?>';
var target = '<?php echo $_GET["target"] ?? ""; ?>';
let attr2 = '';
let attr3 = '';
let attrArr = [];
let menuData = [];
let attrData = [];

$(function () {
    ajaxCall('/category/menu', {}, function(data) {
        menuData = data;
        goReload();
    });
});

function goReload() {
    history.pushState(null, null, `/z/product/list?page=${page}&c_seq=${c_seq}&sk=${sk}&ob=${ob}&target=${target}&attr2=${attr2}`);
    setPageTitleSub();
    setSortOrder();
    setCateWrap();
    productLoad();

    if (attrArr.length > 0) {
        attrArr.forEach(v => {
            let attrName = $(`#goAttr3-${v}`).attr('data-attr_name');
            goDrawLiFn(v, attrName, false);
        });
    }
}

function setCateWrap() {
    if (!menuData || !c_seq) return;

    const $wrap = $('#category-select-wrap').empty();
    const path = findPath(menuData, c_seq);
    if (!path.length) return;

    path.forEach((node, depth) => {
        const children = node.children || [];
        if (children.length === 0) return;

        const $depthWrap = $(`<div id="list-cate-depth-${depth}" class="list-cate-wrap"></div>`);
        children.forEach(child => {
            const active = (child.seq == c_seq) ? 'active' : '';
            const html = `<div class="cate-item ${active}" onclick="goCate('${child.seq}')">${child.name}</div>`;
            $depthWrap.append(html);
        });
        $wrap.append($depthWrap);
    });
}

// 특정 seq에 도달할 때까지의 경로를 반환
function findPath(list, targetSeq, path = []) {
    for (const item of list) {
        const newPath = [...path, item];
        if (item.seq == targetSeq) return newPath;
        if (item.children?.length) {
            const found = findPath(item.children, targetSeq, newPath);
            if (found.length) return found;
        }
    }
    return [];
}

function goCate(_seq) {
    c_seq = _seq;
    attr2 = '';
    attr3 = '';
    attrArr = [];
    page = 1;

    $('#list-attr3-wrap, #list-attr2-wrap').empty().addClass('d-none');
    $('#list-attr4-wrap').empty();

    if (['7', '40', '71'].includes(String(c_seq))) {
        setAttrWrap(c_seq);
    }

    goReload();
}

function setAttrWrap(cate2seq) {
    let parent2 = { 7: 1, 40: 2, 71: 3 }[cate2seq];
    const $wrap = $('#list-attr2-wrap').empty().addClass('d-none');

    ajaxCall('/common/all', { table: 'attribute', ob: 'ORDER BY sort ASC' }, function (data) {
        attrData = data;
        const depth2Items = data.filter(item => item.parent == parent2);
        if (depth2Items.length > 0) {
            $wrap.removeClass('d-none');
            let _name = '';
            depth2Items.forEach(v => {
                if (v.seq == attr2 && v.name == '색상') _name = v.name;
                const active = (v.seq == attr2) ? 'active' : '';
                const html = `<div class="cate-item ${active} attr2-item attr2-item${v.seq}" onclick="goAttr2('${v.seq}', '${v.name}')">${v.name}</div>`;
                $wrap.append(html);
            });
            if (attr3) goAttr2(attr2, _name);
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
    const $wrap = $('#list-attr3-wrap').empty().removeClass('d-none');
    depth3Items.forEach(v => {
        const active = (v.seq == attr3) ? 'active' : '';
        let imgStr = (_name == '색상') ? `<img src="${v.img}" style="width:20px;">` : '';
        const html = `<div class="cate-item goAttr3Click" id="goAttr3-${v.seq}" data-attr_seq="${v.seq}" data-attr_name="${v.name}">${imgStr}${v.name}</div>`;
        $wrap.append(html);
    });
}

$(document).on('click', '.goAttr3Click', function () {
    page = 1;
    let attr_seq = $(this).data('attr_seq');
    let attr_name = $(this).data('attr_name');
    if (!$(`#li-${attr_seq}`).length) goDrawLiFn(attr_seq, attr_name, true);
});

function goDrawLiFn(attr_seq, attr_name, arrBoolean) {
    if (arrBoolean) attrArr.push(attr_seq);
    attr3 = attrArr;
    $('#list-attr4-wrap').append(`<li id="li-${attr_seq}" class="attr-choice-item">${attr_name}<span class="btn-remove" onclick="goRemoveLiFn('${attr_seq}')">X</span></li>`);
    goReload();
}

function goRemoveLiFn(attr_seq) {
    attrArr = attrArr.filter(seq => seq != attr_seq);
    attr3 = attrArr;
    $(`#li-${attr_seq}`).remove();
    goReload();
}

function setPageTitleSub() {
    const $title = $('#product-search-keyword');
    if (sk) {
        $title.html(`"${sk}" 검색`);
    } else if (c_seq) {
        const node = getSeq('category', c_seq);
        $title.html(node?.name || '카테고리');
    } else if (target === 'best') {
        $title.html('베스트');
    } else if (target === 'new') {
        $title.html('신상품');
    } else {
        $title.html('전체');
    }
}

function setSortOrder() {
    $('.tf-control-sorting select').val(ob);
}

$('.tf-control-sorting select').change(function () {
    ob = $(this).val();
    page = 1;
    goReload();
});

function productLoad() {
    $('#gridLayout').empty();
    let url = `/product/list`;
    if (isDescendantCategory('40') || isDescendantCategory('7')) {
        url = `/product/list-option`;
    }

    ajaxCall(url, { ppp: DEFAULT_PPP, page, c_seq, sk, ob, target, attr2, attr3 }, function (data) {
        $('.item-total-count').html(data.totalCount);
        if (data.totalCount === 0) {
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
    if (isDescendantCategory(c_seq, '40') || isDescendantCategory(c_seq, '7')) {
        $('#gridLayout').append(makeProductItemStr(v, true));
    } else {
        $('#gridLayout').append(makeProductItemStr(v));
    }
}

</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>