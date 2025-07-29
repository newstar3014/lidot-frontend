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


    // 최초 진입 시 c_seq 기준으로 단계별 카테고리 렌더링
    function setCateWrap() {
        if (!c_seq || !menuData) return;

        // 경로를 역추적하여 depth 별로 단계 생성
        const buildPathToNode = (list, targetSeq, path = []) => {
            for (const item of list) {
                const newPath = [...path, item];
                if (item.seq == targetSeq) return newPath;
                if (item.children?.length) {
                    const found = buildPathToNode(item.children, targetSeq, newPath);
                    if (found) return found;
                }
            }
            return null;
        };

        const path = buildPathToNode(menuData, c_seq);
        if (!path) return;

        // 초기화
        $('#category-select-wrap').empty();

        for (let depth = 0; depth < path.length; depth++) {
            const currentNode = path[depth];
            const children = currentNode.children || [];

            const wrapId = `list-cate-depth-${depth + 1}`;
            const $wrap = $(`<div id="${wrapId}" class="list-cate-wrap"></div>`);

            children.forEach(child => {
                const active = child.seq == c_seq ? 'active' : '';
                $wrap.append(`<div class="cate-item ${active}" onclick="goCate('${child.seq}')">${child.name}</div>`);
            });

            $('#category-select-wrap').append($wrap);
        }
    }

// 클릭 시 하위 카테고리 렌더링
    function goCate(_seq) {
        // 상태 초기화
        sc = '';
        attr2 = '';
        attr3 = '';
        attrArr = [];
        page = 1;

        $('#list-attr3-wrap').empty().addClass('d-none');
        $('#list-attr4-wrap').empty();
        $('#list-attr2-wrap').empty().addClass('d-none');

        const node = findNodeBySeq(menuData, _seq);
        if (!node) return;

        sc = node.seq;

        if (['7', '40', '71'].includes(String(sc))) {
            setAttrWrap(sc);
        }

        // 기존 더 깊은 depth 제거
        const currentDepth = parseInt(node.depth);
        $(`#category-select-wrap > div`).each(function () {
            const id = $(this).attr('id');
            const match = id?.match(/list-cate-depth-(\d+)/);
            if (match && parseInt(match[1]) > currentDepth) {
                $(this).remove();
            }
        });

        // 다음 depth 영역 생성 및 렌더링
        const nextDepth = currentDepth + 1;
        const wrapId = `list-cate-depth-${nextDepth}`;
        let $wrap = $(`#${wrapId}`);
        if ($wrap.length === 0) {
            $('#category-select-wrap').append(`<div id="${wrapId}" class="list-cate-wrap"></div>`);
            $wrap = $(`#${wrapId}`);
        } else {
            $wrap.empty();
        }

        if (node.children?.length) {
            node.children.forEach(v => {
                const itemStr = `<div class="cate-item" onclick="goCate('${v.seq}')">${v.name}</div>`;
                $wrap.append(itemStr);
            });
            $wrap.removeClass('d-none');
        } else {
            $wrap.addClass('d-none');
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