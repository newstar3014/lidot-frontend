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
    var c_seq = '<?php echo $_GET["c_seq"] ?? ''; ?>';
    var sk = '<?php echo $_GET["sk"] ?? ''; ?>';
    if(sk) insertSearchKeyword(sk);
    var ob = '<?php echo $_GET["ob"] ?? ''; ?>' || 'n';
    var page = '<?php echo $_GET["page"] ?? 1; ?>';
    var target = '<?php echo $_GET["target"] ?? ''; ?>';

    let attr2 = '';
    let attr3 = '';
    let attrArr = [];

    $(function () {
        goReload();
    });

    function goReload() {
        history.pushState(null, null, `/z/product/list?page=${page}&c_seq=${c_seq}&sk=${sk}&ob=${ob}&target=${target}&attr2=${attr2}`);

        setPageTitleSub();
        setSortOrder();
        setCateWrap();
        productLoad();

        if (c_seq) {
            goCate(c_seq);
        }
    }


    function setAttrWrap(cate2seq) {
        let parent2;
        if (cate2seq == 7) parent2 = 1;
        else if (cate2seq == 40) parent2 = 2;
        else if (cate2seq == 71) parent2 = 3;

        const $wrap = $('#list-attr2-wrap').empty().addClass('d-none');

        ajaxCall('/common/all', { table: 'attribute', ob: 'ORDER BY sort ASC' }, function (data) {
            attrData = data;
            const depth2Items = data.filter(item => item.parent == parent2);
            if (depth2Items.length > 0) {
                $wrap.removeClass('d-none');
                let _name = '';
                $.each(depth2Items, function (i, v) {
                    if (v.seq == attr2 && v.name == '색상') _name = v.name;
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


    function setCateWrap() {
        if (!c_seq || !menuData) return;

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

        const children = findChildren(menuData, c_seq);

        if (children.length === 0) {
            $wrap.addClass('d-none');
        } else {
            $wrap.removeClass('d-none');
            children.forEach(v => {
                const active = v.seq == c_seq ? 'active' : '';
                $wrap.append(`<div class="cate-item ${active}" onclick="goCate('${v.seq}')">${v.name}</div>`);
            });
        }
    }

    function goCate(_seq) {
        // 상태 초기화
        sc = ''; // 최종 선택된 카테고리 seq
        attr2 = ``;
        attr3 = ``;
        attrArr = [];
        page = 1;

        $('#list-attr3-wrap').empty().addClass('d-none');
        $('#list-attr4-wrap').empty();
        $('#list-attr2-wrap').empty().addClass('d-none');

        // 현재 선택된 카테고리 노드 찾기
        const node = findNode(menuData, _seq);
        if (!node) return;

        sc = node.seq;

        // depth 계산
        const depth = getNodeDepth(menuData, node.seq) || 1;
        const nextDepth = depth + 1;

        // 특성 적용은 depth:2에서만
        if (depth === 2 && ['7', '40', '71'].includes(String(sc))) {
            setAttrWrap(sc);
        }

        const $wrap = $('#list-cate-next-wrap');

        // 현재 depth보다 큰 기존 depth-box 제거
        $wrap.find('.depth-box').each(function () {
            const d = parseInt($(this).attr('data-depth'), 10);
            if (d >= nextDepth) $(this).remove();
        });

        // 하위 카테고리 있을 경우 다음 depth 박스 추가
        if (node.children?.length) {
            const $depthBox = $('<div class="depth-box"></div>').attr('data-depth', nextDepth);
            node.children.forEach(v => {
                const itemStr = `
                    <div class="cate-item" onclick="goCate('${v.seq}')">
                        ${v.name}
                    </div>`;
                $depthBox.append(itemStr);
            });
            $wrap.append($depthBox);
            $wrap.removeClass('d-none');
        } else {
            // 더 이상 자식이 없다면 다음 박스 없음
            // 마지막 자식에서 더 깊은 것들만 지우면 되므로 위에서 처리됨
        }

        goReload();
    }

    function setPageTitleSub() {
        const $title = $('#product-search-keyword');
        if (sk) {
            $title.html(`"${sk}" 검색`);
        } else if (c_seq) {
            const node = getSeq('category', c_seq);
            if (node?.name) $title.html(node.name);
            else $title.html('카테고리');
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