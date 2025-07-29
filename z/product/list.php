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
let sc = '<?php echo $_GET["sc"] ?? ""; ?>';
let sk = '<?php echo $_GET["sk"] ?? ""; ?>';
let ob = '<?php echo $_GET["ob"] ?? "n"; ?>';
let page = '<?php echo $_GET["page"] ?? 1; ?>';
let target = '<?php echo $_GET["target"] ?? ""; ?>';
let attr2 = '';
let attr3 = '';
let attrArr = [];

$(function () {
    goReload();
});

function goReload() {
    history.pushState(null, null, `/z/product/list?page=${page}&sc=${sc}&sk=${sk}&ob=${ob}&target=${target}&attr2=${attr2}`);
    setPageTitleSub();
    setSortOrder();
    productLoad();
    if (sc && menuData) renderCategoryPath(sc);
    else renderCategoryRoot();
}

function renderCategoryRoot() {
    const depth1 = menuData.filter(item => item.depth == 1 && item.show_yn === 'Y');
    const $wrap = $('#category-select-wrap').empty();
    const $depthWrap = $(`<div id="list-cate-depth-1" class="list-cate-wrap"></div>`);
    depth1.forEach(v => {
        $depthWrap.append(`<div class="cate-item" onclick="goCate('${v.seq}')">${v.name}</div>`);
    });
    $wrap.append($depthWrap);
}

function goCate(_seq) {
    sc = _seq;
    attr2 = '';
    attr3 = '';
    attrArr = [];
    page = 1;
    renderCategoryPath(_seq);
    goReload();
}

function renderCategoryPath(seq) {
    const path = findCategoryPath(menuData, seq);
    if (!path.length) return;
    $('#category-select-wrap').empty();
    path.forEach((node, i) => {
        const $depthWrap = $(`<div id="list-cate-depth-${i + 1}" class="list-cate-wrap"></div>`);
        const siblings = findSiblings(menuData, node.seq);
        siblings.forEach(v => {
            const active = v.seq == node.seq ? 'active' : '';
            $depthWrap.append(`<div class="cate-item ${active}" onclick="goCate('${v.seq}')">${v.name}</div>`);
        });
        $('#category-select-wrap').append($depthWrap);
    });
    const lastNode = path[path.length - 1];
    if (lastNode.children?.length) {
        const $childWrap = $(`<div id="list-cate-depth-${path.length + 1}" class="list-cate-wrap"></div>`);
        lastNode.children.forEach(v => {
            $childWrap.append(`<div class="cate-item" onclick="goCate('${v.seq}')">${v.name}</div>`);
        });
        $('#category-select-wrap').append($childWrap);
    }
    if (["7", "40", "71"].includes(String(sc))) setAttrWrap(sc);
    else $('#list-attr2-wrap').empty().addClass('d-none');
}

function findCategoryPath(list, targetSeq, path = []) {
    for (const item of list) {
        const newPath = [...path, item];
        if (item.seq == targetSeq) return newPath;
        if (item.children?.length) {
            const result = findCategoryPath(item.children, targetSeq, newPath);
            if (result.length) return result;
        }
    }
    return [];
}

function findSiblings(list, targetSeq) {
    for (const item of list) {
        if (item.seq == targetSeq) return list;
        if (item.children?.length) {
            const found = findSiblings(item.children, targetSeq);
            if (found) return found;
        }
    }
    return [];
}

function setAttrWrap(cate2seq) {
    let parent2 = '';
    if (cate2seq == 7) parent2 = 1;
    else if (cate2seq == 40) parent2 = 2;
    else if (cate2seq == 71) parent2 = 3;

    const $wrap = $('#list-attr2-wrap').empty().addClass('d-none');

    ajaxCall('/common/all', { table: 'attribute', ob: 'ORDER BY sort ASC' }, function (data) {
        attrData = data;
        const depth2Items = data.filter(item => item.parent == parent2);
        if (depth2Items.length > 0) {
            $wrap.removeClass('d-none');
            let _name = ``;
            $.each(depth2Items, function (i, v) {
                if (v.seq == attr2 && v.name == '색상') _name = v.name;
                const active = (v.seq == attr2) ? 'active' : '';
                const itemStr = `<div class="cate-item ${active} attr2-item attr2-item${v.seq}" onclick="goAttr2('${v.seq}', '${v.name}')">${v.name}</div>`;
                $wrap.append(itemStr);
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
    $.each(depth3Items, function (i, v) {
        const active = (v.seq == attr3) ? 'active' : '';
        let imgStr = (_name == '색상') ? `<img src="${v.img}" style="width:20px;">` : '';
        const itemStr = `<div class="cate-item goAttr3Click" id="goAttr3-${v.seq}" data-attr_seq="${v.seq}" data-attr_name="${v.name}">${imgStr}${v.name}</div>`;
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
    let str = `<li id="li-${attr_seq}" class="attr-choice-item">${attr_name}<span class="btn-remove" onclick="goRemoveLiFn('${attr_seq}')">X</span></li>`;
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

function setPageTitleSub() {
    const $title = $('#product-search-keyword');
    if (sk) $title.html(`"${sk}" 검색`);
    else if (sc) {
        const node = getSeq('category', sc);
        if (node?.name) $title.html(node.name);
        else $title.html('카테고리');
    } else if (target === 'best') $title.html('베스트');
    else if (target === 'new') $title.html('신상품');
    else $title.html('전체');
}

function setSortOrder() {
    $('.tf-control-sorting select').val(ob);
}

$('.tf-control-sorting select').change(function () {
    ob = $(this).val();
    page = 1;
    goReload();
});
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>