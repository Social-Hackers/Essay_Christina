var prologeState = document.getElementsByClassName('prologe_header');
var art_innerState = document.getElementsByClassName('art_inner_main');
var switch_articleState = document.getElementsByClassName('switch_article');
var messageState = document.getElementById('message_box');
var prologe_counter = 0;
var text;
var prologeLast = prologeState.length - 1;

	$(function(){
		for(var i=0;i<prologeState.length;i++){
				$(prologeState[i]).css('opacity',0);
		}//プロローグを隠します

		setInterval(function(){
			page_prologe();
		},17000);//タイマーの設定

		function page_prologe(){
			$(prologeState[0]).show()
								.css('margin-top','125px')
								.css('marign-left','45px');
				if( parseInt($('body').css('width')) > 767 ){
					$(prologeState[0]).css('font-size','2.8rem');
				} else {
					$(prologeState[0]).css('font-size','1.8rem');
				}//PCのときは28px,それ以下の幅は18pxにフォントサイズを調整します
			$(prologeState[0])
					.animate({
						'opacity' : '0.9',
						'margin-top' : '35px'
					},7400,'swing',function(){
						$(prologeState[0])
							.animate({
								'opacity' : '0',
								'margin-top' : '55px'
							},8000,'swing',function(){
								$(prologeState[0])
									.hide()
									.appendTo(messageState);
							});
					});
		}

		for(var j=2;j<art_innerState.length;j++){
			//$(art_innerState[j]).hide();
		}

		for(var k=0;k<switch_articleState.length;k++){
			switch_articleState[k].addEventListener('click',function(){
				for(var j=0;j<art_innerState.length;j++){
					if( $(art_innerState[j]).css('display') == 'none' ){
						//$(art_innerState[j]).css('opacity',0);
					}
					$(art_innerState[j]).hide();
				}

				$(art_innerState[1]).show();
				$(art_innerState[1]).animate(
						{ opacity:1 }
					,2200,'swing');
			});
		}
	});

