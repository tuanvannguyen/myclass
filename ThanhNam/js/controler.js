
function clickComment(){
	//xu ly su kien click button Comment
	$('#bt-comment').on('click',function(){
		//lay ten nguoi comment
		var name=$('#text-name').val();
		//lay noi dung comment
		var content=$('#text-comment').val();
		//cat lay chu dau cua ten
		var fisrtName=name.substring(0,1);
		
		
		//kiem tra thong tin co bi trung hay chua
		
		var oldFirstName=$('#name-avata').html();
		console.log(oldFirstName);
	
		//tao div de add thong tin
		
		var myDiv='<div class=people-comment>';
		    myDiv+='<div class="avata value-'+ fisrtName  +'">';
		    myDiv+='<p id=name-avata>'+fisrtName+'</p>';
			myDiv+='</div>';
			myDiv+='<div class=info-people>';
		    myDiv+='<p id=name>'+name+'</p>';
			myDiv+='<p id=name>'+content+'</p>';
			myDiv+='</div>';
			$('.info').append(myDiv);
		    var back =["#ff4000","#80ff00","#00ff00","#00ffff","#bf00ff","#000080","#0000FF","#228B22"];
		    var rand = back[Math.floor(Math.random() * back.length)];
		    $('.value-'+fisrtName+'').css('background',rand);
	});
}

$(document).ready(function(){
	clickComment();
});