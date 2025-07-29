
    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /gotop -->

    <!-- 모바일 전용 하단 툴바 -->
    <div class="tf-toolbar-bottom type-1150">
        <div class="toolbar-item">
            <a href="/z/product/list">
                <div class="toolbar-icon">
                    <i class="icon-shop"></i>
                </div>
                <!-- <div class="toolbar-label">Shop</div> -->
            </a>
        </div>

        <div class="toolbar-item">
            <a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                <div class="toolbar-icon">
                    <i class="icon-search"></i>
                </div>
                <!-- <div class="toolbar-label">Search</div> -->
            </a>
        </div>
        <div class="toolbar-item">
            <a href="javascript:openLogin()">
                <div class="toolbar-icon">
                    <i class="icon-account"></i>
                </div>
                <!-- <div class="toolbar-label">Account</div> -->
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#shoppingCart" data-bs-toggle="modal">
                <div class="toolbar-icon">
                    <i class="icon-bag"></i>
                    <div class="toolbar-count">1</div>
                </div>
                <!-- <div class="toolbar-label">Cart</div> -->
            </a>
        </div>
    </div>
    <!-- /모바일 전용 하단 툴바 -->
    
    <? include_once $_SERVER["DOCUMENT_ROOT"].'/_sidebar.php'; ?>
    <? include_once $_SERVER["DOCUMENT_ROOT"].'/_modal.php'; ?>
    
    <script type="text/javascript" src="/js/carousel.js"></script>
    <script type="text/javascript" src="/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="/js/lazysize.min.js"></script>
    <script type="text/javascript" src="/js/count-down.js"></script>
    <script type="text/javascript" src="/js/drift.min.js"></script>
    <script type="text/javascript" src="/js/wow.min.js"></script>
    <script type="text/javascript" src="/js/nouislider.min.js"></script>
    <script type="text/javascript" src="/js/shop.js"></script>
    <script type="text/javascript" src="/js/multiple-modal.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    
    <script type="module" src="/js/model-viewer.min.js"></script>
    <script type="module" src="/js/zoom.js"></script>
</body>

</html>
