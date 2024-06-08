

$(document).ready(function(){
    console.log('COMMUNITY START ---- ');
    if(!user_info){
        $("#edditbtn").remove()
    }
    setSearchWrap();
    loadNotice();
    loadCommunity();
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
            c_kind: '공지사항',
            c_type: '공지사항',
            searchKeyword: '',
            searchType: '',
            searchDate: ''
        },
        success: function(data){
            console.log('데이터 : ');
            console.log(data);
            $.each(data.rows,function(i,v){
                console.log(v);
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

				$('#notice').append(str);

                var str_m = '<tr onclick="goSeq(\''+v.c_seq+'\',\''+v.c_user+'\');">\
							<td>'+num+'</td>\
							<td class="text-left"><span class="board-title">'+v.c_title+'</span><br>'+c_date+' | 조회 : '+v.c_view+'</td>\
						</tr>';

				$('#notice_m').append(str_m);
            });
        },
        error: function (request, status, error){
            console.log(error);
        }
    });
}

function loadCommunity(){
    $.ajax({
        url: SERVER_AP+"/community/paging",
        type: "post",
        cache: false,
        data:{
            page:page,
            ppp:ppp,
            c_kind: '공지사항',
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

				$('#normal').append(str);

                var str_m = '<tr onclick="goSeq(\''+v.c_seq+'\',\''+v.c_user+'\');">\
							<td>'+number+'</td>\
							<td class="text-left"><span class="board-title">'+v.c_title+'</span><br>'+c_date+' | 조회 : '+v.c_view+'</td>\
						</tr>';

				$('#normal_m').append(str_m);
            });

            drawPaging(data.totalPage);
        },
        error: function (request, status, error){
            console.log(error);
        }
    });
}

function goSeq(_seq, _user){
	var url = '/community_see.php?c_seq='+_seq+'&u_seq='+_user;
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

    location.href = '/community.php?page='+page+'&sk='+sk+'&st='+st+'&sd='+sd;
}

function goSearch(){
    sk = $('#board-sk').val();
    st = $('#board-st').val();
    sd = $('#board-sd').val();
    location.href = '/community.php?page=1&sk='+sk+'&st='+st+'&sd='+sd;
}
