<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>


<div class="container py-5" style="max-width: 900px;">

    <!-- 제목 -->
    <h5 id="title" class="fw-bold mb-3"></h5>
    <h6 id="oneline" class="fw-bold mb-3"></h6>

    <!-- 날짜, 조회수 -->
    <div id="idt" class="text-muted mb-4 small"></div>
    <hr/>

    <!-- 대표 이미지 -->
    <div id="attach" class="mb-4"></div>

    <!-- 본문 내용 -->
    <div id="contents" class="fs-5 lh-lg mb-5">
        <!-- summernote 내용 주입 -->
    </div>

    <!-- 목록으로 -->
    <div class="text-end border-top pt-3">
        <a href="/z/notice/list" class="btn btn-dark">← 목록으로</a>
    </div>

</div>

<script type="text/javascript">

    let seq = '<? echo $_GET["n_seq"]; ?>';

    $(function() {
        setPageTitle('공지사항', 'notice');
        dataLoad();
    });

    function dataLoad(){

        ajaxCall('/etc/noticeDetail', { 
            obj : {n_seq : seq, user_seq : my_obj.user_seq}
        }, function(data) {
            console.log('data : ', data);
            
           let v = data.rows[0];
        

            $('#title').html(v.title);
            $('#idt').html(v.idt.substr(0,10));
            if(v.files){
                let str = '';
                $.each(JSON.parse(v.files), function(ii,vv){
                    str += `<i class="bi bi-download me-1"></i> <a href="${vv.url}">${vv.name}</a>`;
                })

                str += `<hr />`;

                $('#attach').html(str);
            }
            $('#contents').html(v.contents);
        });
    }
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>