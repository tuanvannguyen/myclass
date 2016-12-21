
function clickComment(){
	//xu ly su kien click button Comment
	$('#bt-comment').on('click',function(){
		//lay ten nguoi comment
		var name=$('#text-name').val();
		//lay noi dung comment
		var content=$('#text-comment').val();
		//cat lay chu dau cua ten
		var fisrtName=name.substring(0,1).toLowerCase();
		
		//tao div de add thong tin
		
		var myDiv='<div class=people-comment>';
		    myDiv+='<div class=avata>';
		    myDiv+='<image src=image/'+fisrtName+'.png/>';
			myDiv+='</div>';
			myDiv+='<div class=info-people>';
		    myDiv+='<p id=name>'+name+'</p>';
			myDiv+='<p id=name>'+content+'</p>';
			myDiv+='</div>';
			$('.info').append(myDiv);
			
	});
}

$(document).ready(function(){
	clickComment();
});