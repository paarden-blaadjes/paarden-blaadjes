///////////////////////////// DIT KUN JE AANPASSEN ///////////////////////////

var menubalk5={
// pad naar de afbeeldingen van de pijltjes (23 is padding-right toegevoegd aan LIs met subitems):
arrowimages: {down:['downarrowclass', 'centrale/down.gif', 0], right:['rightarrowclass', 'centrale/right.gif']},
// duur van slide-in of slide-out animatie in milliseconden:
transition: {overtime:500, outtime:500},
// schaduw ? : true of false:
shadow: {enable:false, offsetx:5, offsety:5}, 
// vertraging vooraleer submenus verschijnen of verdwijnen:
showhidedelay: {showdelay: 100, hidedelay: 200}, 

///////////////////////////// HIERONDER NIETS MEER WIJZIGEN ///////////////////////////

detectwebkit: navigator.userAgent.toLowerCase().indexOf("applewebkit")!=-1,
detectie6: document.all && !window.XMLHttpRequest,
css3support: window.msPerformance || (!document.all && document.querySelector), 
getajaxmenu:function($, setting){ 
	var $menucontainer=$('#'+setting.bron[0])
	$menucontainer.html("Bezig met ophalen van het menu ...")
	$.ajax({
		url: setting.bron[1],
		async: true,
		error:function(ajaxrequest){
			$menucontainer.html('Error fetching content. Server Response: '+ajaxrequest.responseText)
		},
		success:function(content){
			$menucontainer.html(content)
			menubalk5.buildmenu($, setting)
		}
	})
},

buildmenu:function($, setting){
	var mijn_menu=menubalk5
	var $mainmenu=$("#"+setting.hoofdmenuid+">ul")
	$mainmenu.parent().get(0).className=setting.classname || "menubalk5"
	var $headers=$mainmenu.find("ul").parent()
	$headers.hover(
		function(e){
			$(this).children('a:eq(0)').addClass('selected')
		},
		function(e){
			$(this).children('a:eq(0)').removeClass('selected')
		}
	)
	$headers.each(function(i){
		var $curobj=$(this).css({zIndex: 100-i})
		var $subul=$(this).find('ul:eq(0)').css({display:'block'})
		$subul.data('timers', {})
		this._dimensions={w:this.offsetWidth, h:this.offsetHeight, subulw:$subul.outerWidth(), subulh:$subul.outerHeight()}
		this.istopheader=$curobj.parents("ul").length==1? true : false
		$subul.css({top:this.istopheader && setting.orientatie!='v'? this._dimensions.h+"px" : 0})
		$curobj.children("a:eq(0)").css(this.istopheader? {paddingRight: mijn_menu.arrowimages.down[2]} : {}).append(
			'<img src="'+ (this.istopheader && setting.orientatie!='v'? mijn_menu.arrowimages.down[1] : mijn_menu.arrowimages.right[1])
			+'" class="' + (this.istopheader && setting.orientatie!='v'? mijn_menu.arrowimages.down[0] : mijn_menu.arrowimages.right[0])
			+ '" style="border:0;" />'
		)
		if (mijn_menu.shadow.enable && !mijn_menu.css3support){
			this._shadowoffset={x:(this.istopheader?$subul.offset().left+mijn_menu.shadow.offsetx : this._dimensions.w), y:(this.istopheader? $subul.offset().top+mijn_menu.shadow.offsety : $curobj.position().top)}
			if (this.istopheader)
				$parentshadow=$(document.body)
			else{
				var $parentLi=$curobj.parents("li:eq(0)")
				$parentshadow=$parentLi.get(0).$shadow
			}
			this.$shadow=$('<div class="schaduw'+(this.istopheader? ' toplevelschaduw' : '')+'"></div>').prependTo($parentshadow).css({left:this._shadowoffset.x+'px', top:this._shadowoffset.y+'px'})  
		}
		$curobj.hover(
			function(e){
				var $targetul=$subul 
				var header=$curobj.get(0)
				clearTimeout($targetul.data('timers').hidetimer)
				$targetul.data('timers').showtimer=setTimeout(function(){
					header._offsets={left:$curobj.offset().left, top:$curobj.offset().top}
					var menuleft=header.istopheader && setting.orientatie!='v'? 0 : header._dimensions.w
					menuleft=(header._offsets.left+menuleft+header._dimensions.subulw>$(window).width())? (header.istopheader && setting.orientatie!='v'? -header._dimensions.subulw+header._dimensions.w : -header._dimensions.w) : menuleft 
					if ($targetul.queue().length<=1){
						$targetul.css({left:menuleft+"px", width:header._dimensions.subulw+'px'}).animate({height:'show',opacity:'show'}, menubalk5.transition.overtime)
						if (mijn_menu.shadow.enable && !mijn_menu.css3support){
							var shadowleft=header.istopheader? $targetul.offset().left+menubalk5.shadow.offsetx : menuleft
							var shadowtop=header.istopheader?$targetul.offset().top+mijn_menu.shadow.offsety : header._shadowoffset.y
							if (!header.istopheader && menubalk5.detectwebkit){
								header.$shadow.css({opacity:1})
							}
							header.$shadow.css({overflow:'', width:header._dimensions.subulw+'px', left:shadowleft+'px', top:shadowtop+'px'}).animate({height:header._dimensions.subulh+'px'}, menubalk5.transition.overtime)
						}
					}
				}, menubalk5.showhidedelay.showdelay)
			},
			function(e){
				var $targetul=$subul
				var header=$curobj.get(0)
				clearTimeout($targetul.data('timers').showtimer)
				$targetul.data('timers').hidetimer=setTimeout(function(){
					$targetul.animate({height:'hide', opacity:'hide'}, menubalk5.transition.outtime)
					if (mijn_menu.shadow.enable && !mijn_menu.css3support){
						if (menubalk5.detectwebkit){
							header.$shadow.children('div:eq(0)').css({opacity:0})
						}
						header.$shadow.css({overflow:'hidden'}).animate({height:0}, menubalk5.transition.outtime)
					}
				}, menubalk5.showhidedelay.hidedelay)
			}
		) 
	})
	if (mijn_menu.shadow.enable && mijn_menu.css3support){ 
		var $toplevelul=$('#'+setting.hoofdmenuid+' ul li ul')
		var css3shadow=parseInt(mijn_menu.shadow.offsetx)+"px "+parseInt(mijn_menu.shadow.offsety)+"px 5px #aaa" 
		var shadowprop=["boxShadow", "MozBoxShadow", "WebkitBoxShadow", "MsBoxShadow"]
		for (var i=0; i<shadowprop.length; i++){
			$toplevelul.css(shadowprop[i], css3shadow)
		}
	}
	$mainmenu.find("ul").css({display:'none', visibility:'visible'})
},

init:function(setting){
	if (typeof setting.kleuren=="object" && setting.kleuren.length==2){
		var hoofdmenuid='#'+setting.hoofdmenuid
		var mainselector=(setting.orientatie=="v")? hoofdmenuid : hoofdmenuid+', '+hoofdmenuid
		document.write('<style type="text/css">\n'
			+mainselector+' ul li a {background:'+setting.kleuren[0]+';}\n'
			+hoofdmenuid+' ul li a:hover {background:'+setting.kleuren[1]+';}\n'
		+'</style>')
	}
	this.shadow.enable=(document.all && !window.XMLHttpRequest)? false : this.shadow.enable
	jQuery(document).ready(function($){ 
		if (typeof setting.bron=="object"){ 
			menubalk5.getajaxmenu($, setting)
		}
		else{
			menubalk5.buildmenu($, setting)
		}
	})
}

}
