

$(document).ready(function(){
    console.log('AS START ---- ');
    if(!user_info){
        $("#edditbtn").remove()
    }
    setSearchWrap();
    loadNotice();
    loadAs();
});

function setSearchWrap(){
    if(sk) $('#board-sk').val(sk);
    if(st) $('#board-st').val(st);
    if(sd) $('#board-sd').val(sd);
}

function loadNotice(){
    $.ajax({
        url: SERVER_AP+"/community/paging",
        type: "post",
        cache: false,
        async: false,
        data:{
            page:'1',
            ppp:'99',
            c_kind: 'AS',
            c_type: '공지사항',
            searchKeyword: '',
            searchType: '',
            searchDate: ''
        },
        success: function(data){

            $.each(data.rows,function(i,v){
                if(!v.u_name){
                    v.u_name = '관리자'
                }
				var num = '공지';

				var c_date = v.c_date;
				c_date = c_date.substr(0, 10);

				var str = '<tr onclick="goSeq(\''+v.c_seq+'\',\''+v.c_user+'\');">\
							<td>'+num+'</td>\
							<td class="board-title">'+v.c_title+'</td>\
							<td>'+v.u_name+'</td>\
							<td>'+c_date+'</td>\
							<td>'+v.c_view+'</td>\
						</tr>';

				$('.table-board #notice').append(str);
            });
        },
        error: function (request, status, error){
            console.log(error);
        }
    });
}

function loadAs(){
    $.ajax({
        url: SERVER_AP+"/community/paging",
        type: "post",
        cache: false,
        data:{
            page:page,
            ppp:ppp,
            c_kind: 'AS',
            c_type: '공지사항_일반글',
            searchKeyword: sk,
            searchType: st,
            searchDate: sd
        },
        success: function(data){
			console.log(data);
            $(".cpt").text(data.totalCount)
            //$('.commu_inner').html('');
            console.log('data-', data);
            $.each(data.rows,function(i,v){
                if(!v.u_name){
                    v.u_name = '관리자'
                }
                var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작

				var c_date = v.c_date;
				c_date = c_date.substr(0, 10);

				var str = '<tr onclick="goSeq(\''+v.c_seq+'\',\''+v.c_user+'\');">\
							<td>'+number+'</td>\
							<td class="board-title">'+v.c_title+'</td>\
							<td>'+v.u_name+'</td>\
							<td>'+c_date+'</td>\
							<td>'+v.c_view+'</td>\
						</tr>';

				$('.table-board #normal').append(str);
            });

            drawPaging(data.totalPage);
        },
        error: function (request, status, error){
            console.log(error);
        }
    });
}

function goSeq(_seq, _user){
	var url = '/as_see.php?c_seq='+_seq+'&u_seq='+_user;
	location.href=url;
}

function goPage(_page){
  if(_page == 'prev'){
    page = (page*1) - 1;
  }else if(_page == 'next'){
    page = (page*1) + 1;
  }else{
    page = _page;
  }

    location.href = '/as.php?page='+page+'&sk='+sk+'&st='+st+'&sd='+sd;
}

function goSearch(){
    sk = $('#board-sk').val();
    st = $('#board-st').val();
    sd = $('#board-sd').val();
    location.href = '/as.php?page=1&sk='+sk+'&st='+st+'&sd='+sd;
}
