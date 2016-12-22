

function gen(){
	var line1=['a','b','c','d','e','f'];
	var line2=['g','h','i','j','k','l'];
	var line3=['m','n','o','p','q','r'];
	var line4=['s','t','u','v','w','x'];
	var line5=['y','z','1','2','3','4'];
	var line6=['5','6','7','8','9','0'];
	
    var x1=129;
	var x2=129;
	var x3=129;
	var x4=129;
	var x5=129;
	var x6=129;
		 
	
	for(var i in line1){
		$('.'+line1[i]+'').css('background-position','-'+x1+'px -132px');
		x1+=228;
	}
    x1=129;
	for(var i in line2){
		$('.'+line2[i]+'').css('background-position','-'+x1+'px -351px');
		x1+=228;
	}
	x1=129;
	for(var i in line3){
		$('.'+line3[i]+'').css('background-position','-'+x1+'px -528px');
		x1+=228;
	}
	 x1=129;
	for(var i in line4){
	   $('.'+line4[i]+'').css('background-position','-'+x1+'px -806px');
		x1+=228;
	}
	x1=129;
	console.log(x1);
	for(var i in line5){
	    $('.'+line5[i]+'').css('background-position','-'+x1+'px -1028px');
		x1+=228;
	}
    x1=129;
	for(var i in line6){
		$('.'+line6[i]+'').css('background-position','-'+x1+'px -1259px');
		x1+=228;
	}
}

$(document).ready(function(){
	 //Init add comment event
    $('#btnComment').click(function () {
        var name = $.trim($('#txtName').val().toLowerCase());
        var content = $('#txtComment').val();
        var avatar = name.charAt(0);
        $('.icon-user').append('<div class="item">' +
            '   <div class="avatar ' + avatar + '"></div>' +
            '   <div class="content">' +
            '       <p>' + $('#txtName').val() + '</p>' +
            '       <p>' + content + '</p>' +
            '   </div>' +
            '</div>');
		
		//gen

		gen();
		
        //reset field
        $('#txtName').val('');
        $('#txtComment').val('');
    });
});