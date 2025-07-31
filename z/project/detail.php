<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>


<div class="container py-5" style="max-width: 900px;">

    <!-- 제목 -->
    <h5 id="title" class="fw-bold mb-3"></h5>
    <h6 id="oneline" class="fw-bold mb-3"></h6>

    <!-- 날짜, 조회수 -->
    <div id="idt" class="text-muted mb-4 small">
    </div>

    <!-- 대표 이미지 -->
    <div id="img" class="mb-4">
        
    </div>

    <!-- 본문 내용 -->
    <div id="contents" class="fs-5 lh-lg mb-5">
        <!-- summernote 내용 주입 -->
    </div>

    <!-- 목록으로 -->
    <div class="text-end border-top pt-3">
        <a href="/z/project" class="btn btn-outline-dark">← 목록으로</a>
    </div>

</div>

<script type="text/javascript">

    let seq = '<?php echo $_GET['seq'];?>';
    $(function() {
        console.log('ㅡ PAGE READY');
        dataLoad();
    });

    function dataLoad(){

        ajaxCall('/common/seq', { 
            table: 'project',
            seq
        }, function(data) {
            console.log('data : ', data);
            $('#title').html(data.title);
            $('#oneline').html(data.oneline);
            $('#idt').html(${data.idt.split(' ')[0]});
            $('#img').append(`<img src="${JSON.parse(data.img)[0].url}"
            class="w-100 rounded" style="max-height: 500px; object-fit:cover;">`)
            $('#contents').html(data.contents);
        });

    }

</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>