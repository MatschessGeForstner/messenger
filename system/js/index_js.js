$(document).ready(function(){
    $('#buttonContacts').click(function() {
		alert("Zu Kontakte");
	});
	$('#buttonGroups').click(function() {
		alert("Zu Gruppen");
	});
	$('#me').click(function() {
		$('#logout, #notifications, #add').fadeToggle(200);
	});
	$('#logout').click(function() {
		alert('Ausloggen');
	});
	$('#notifications').click(function() {
		alert('Mute');
	});
	
	//Zu den Tabs
	
	$('#toContacts').click(function() {
		toContacts();
	});
	
	function toContacts() {
		$('#contacts').load('subpages/contacts.php');
		$('#toContacts').css({'background-color': '#BDBDBD'});
		$('#toGroups').css({'background-color': '#D8D8D8'});
	};
	
	$('#toGroups').click(function() {
		$('#contacts').load('subpages/groups.php');
		$('#toContacts').css({'background-color': '#D8D8D8'});
		$('#toGroups').css({'background-color': '#BDBDBD'});
	});
	
	$('#toChat').click(function() {
		$('.content').load('subpages/chat.php');
		clearTabsRight();
		$('#toChat').css({'background-color': '#BDBDBD'});
	});
	$('#toMedia').click(function() {
		$('.content').load('subpages/mediabox.php');
		clearTabsRight();
		$('#toMedia').css({'background-color': '#BDBDBD'});
	});
	$('#toProfile').click(function() {
		$('.content').load('subpages/profile.php');
		clearTabsRight();
		$('#toProfile').css({'background-color': '#BDBDBD'});
	});
	
	function clearTabsRight(){
		$('#toChat').css({'background-color': '#D8D8D8'});
		$('#toMedia').css({'background-color': '#D8D8D8'});
		$('#toProfile').css({'background-color': '#D8D8D8'});
	};
	
	//Mediabox
		
	$('.thumbnail').click(function() {
		$('#' + this.id).toggleClass("thumbnailMarked");
		if ($(".thumbnailMarked").length) {
			$('#mediaboxOptions').fadeIn(150);
		}
		else {
			$('#mediaboxOptions').fadeOut(150);
		}
	});
	$('#deleteMedia').click(function() {
		marked = markedMedia();
		$.each(marked, function(index, value) {
			alert(value);
		});
	});
	$('#downloadMedia').click(function() {
		marked = markedMedia();
		$.each(marked, function(index, value) {
			alert(value);
		});
	});
	
	function markedMedia() {
		marked = [];
		$('.thumbnailMarked').each(function(index){
		  marked.push(this.id);
		});
		return marked;
	};
	
	//Ripple Effect
	  $(function() {
		
		
		$('.ripple').on('click', function (event) {
		  event.preventDefault();
		  
		  var $div = $('<div/>'),
			  btnOffset = $(this).offset(),
				xPos = event.pageX - btnOffset.left,
				yPos = event.pageY - btnOffset.top;
		  

		  
		  $div.addClass('ripple-effect');
		  var $ripple = $(".ripple-effect");
		  
		  $ripple.css("height", $(this).height());
		  $ripple.css("width", $(this).height());
		  $div
			.css({
			  top: yPos - ($ripple.height()/2),
			  left: xPos - ($ripple.width()/2),
			  background: $(this).data("ripple-color")
			}) 
			.appendTo($(this));

		  window.setTimeout(function(){
			$div.remove();
		  }, 2000);
		});
		
	  });
	  
	//add
	$('#add').click(function() {
		$('#overlay').fadeIn(200);
		$('#popup').fadeIn(200);
	});
	$('#popupClose').click(function() {
		$('#overlay').fadeOut(200);
		$('#popup').fadeOut(200);
	});
});