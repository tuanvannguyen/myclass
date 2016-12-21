$(document).ready(function() {
	$('#btnComment').click(function() {
		var name = $('#txtName').val();
		var comment = $('#comment').val();
		var str = name.slice(0,1).toUpperCase();
		var div = '<div class="view-comment">';
		div += '<div class="avatar inline-block data-'+ str +'"><h2>' + str + '</h2></div>';
		div += '<div class="inline-block"><p>' + name + '</p><p>' + comment + '</p></div>';
		div += '</div>';
		$('#showComment').append(div);
		if(str == "Q" || str == "A" || str == "Z" || str == "W" || str == "S" || str == "X") {
			$('.data-' + str + '').css("background-color","#ffe6e6");
		}
		if(str == "E" || str == "D" || str == "C" || str == "R" || str == "F" || str == "V") {
			$('.data-' + str + '').css("background-color","#ccccff");
		}
		if(str == "T" || str == "G" || str == "B" || str == "Y" || str == "H" || str == "N") {
			$('.data-' + str + '').css("background-color","	 #e6ffb3");
		}
		if(str == "U" || str == "J" || str == "M" || str == "I" || str == "K" || str == "O") {
			$('.data-' + str + '').css("background-color","#ccf2ff");
		}
		if(str == "P" || str == "L") {
			$('.data-' + str + '').css("background-color","#ffb380");
		}
	});
});