$(document).ready(function(){
    console.log('Session Start');
});


// 베스트 상품 메뉴카테고리 js
$('.cate_btn').each(function(){
    $(this).click(function(){
        $('.cate_btn').removeClass('active');
        $(this).addClass('active');
    })
});