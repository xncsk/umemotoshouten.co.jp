<script>
	$(function() {
		var windowHeight = $(window).height();
		var headerheight = $("#header").outerHeight();
		$(".box-mv").css("height", windowHeight);
		$(".content").css("padding-top", headerheight);
	});
</script>
<script>
	function wrapCharacters(className) {
        $("." + className).each(function() {
            var text = $(this).text();
            var html = "";
            for (var i = 0; i < text.length; i++) {
                html += "<span>" + text[i] + "</span>";
            }
            $(this).html(html);
        });
    }
    $(document).ready(function() {
        wrapCharacters("smoothText");
    });
</script>
<script>
jQuery(function() {
	var pagetop = $('#page_top');   
	pagetop.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			pagetop.fadeIn();
		} else {
			pagetop.fadeOut();
		}
	});
	pagetop.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});
</script>
<script>
let fadeInTarget = document.querySelectorAll('.fade-in');
window.addEventListener('scroll', () => {
	for (let i = 0; i < fadeInTarget.length; i++){
		const rect = fadeInTarget[i].getBoundingClientRect().top;
		const scroll = window.pageYOffset || document.documentElement.scrollTop;
		const offset = rect + scroll;
		const windowHeight = window.innerHeight;
		if (scroll > offset - windowHeight + 100) {
			fadeInTarget[i].classList.add('scroll-in');
		}
	}
});
</script>
<script>
function BlurTextAnimeControl() {
	$('.blurTrigger').each(function(){
		var elemPos = $(this).offset().top-50;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
			$(this).addClass('blur');
		}else{
			$(this).removeClass('blur');
		}
	});
}
$(window).scroll(function () {
	BlurTextAnimeControl();
});
</script>
<script>
	function bgLRAnime(){
		$('.bgLRTrigger').each(function(){
			var elemPos = $(this).offset().top-50;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight){
				$(this).addClass('bgextend bgLRextend');
			}
		});
	}
	$(window).scroll(function (){
		bgLRAnime();
	});
	function bgLRAnimeOnload(){
		$('.bgLRTriggerOnload').each(function(){
			var elemPos = $(this).offset().top-50;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight){
				$(this).addClass('bgextend bgLRextend');
			}
		});
	}
	$(window).on('load',function (){
		bgLRAnimeOnload();
	});
</script>
<script>
	function bgRLAnime(){
		$('.bgRLTrigger').each(function(){
			var elemPos = $(this).offset().top-50;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight){
				$(this).addClass('bgextend bgRLextend');
			}
		});
	}
	$(window).scroll(function (){
		bgRLAnime();
	});
	function bgRLAnimeOnload(){
		$('.bgRLTriggerOnload').each(function(){
			var elemPos = $(this).offset().top-50;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight){
				$(this).addClass('bgextend bgRLextend');
			}
		});
	}
	$(window).on('load',function (){
		bgRLAnimeOnload();
	});
</script>
<script>
	function activeTrigger(){
		$('.activeTrigger').each(function(){
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight){
				$(this).addClass('is-active');
			}else{
				$(this).removeClass('is-active');
			}
		});
	}
	$(window).scroll(function (){
		activeTrigger();
	});
	function activeTriggerOnload(){
		$('.activeTriggerOnload').each(function(){
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight){
				$(this).addClass('is-active');
			}else{
				$(this).removeClass('is-active');
			}
		});
	}
	$(window).on('load',function (){
		activeTriggerOnload();
	});
</script>