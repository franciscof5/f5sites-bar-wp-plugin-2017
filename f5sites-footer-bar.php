<?php
/* 
Plugin Name: F5 Sites | Footer Bar
Plugin URI: https://www.f5sites.com/software/wordpress/f5sites-footer-bar/
Plugin Description: Just put it on mu-plugins and style it editing the single file php code, made to be simple for developers. WordPress F5 Sites DEV projects. 
Author: Francisco Matelli Matulovic
Author URI: https://www.franciscomat.com/
License: GPLv3
Tags: mu-plugins, notice bars */

add_action("wp_footer", "mnib_activate", 12, 2);

function mnib_activate() {
	#DOMAIN GROUPS
	$global_st = array(
		["F5Sites", "www.f5sites.com/startups/f5sites/", "IT Services For Global Startups", "Serviços para startups globais", "www.f5sites.com"],
		["Pomodoros USA", "www.f5sites.com/startups/pomodoros-usa/", "Open source online app, time tracker for projects", "App online de código-aberto para medir tempo de projetos", "www.pomodoros.com.br"],
		["Projectimer", "www.f5sites.com/startups/projectimer/", "App for teams and startups track project time", "App para times cronometrarem tempo de projeto", "www.projectimer.com"],
		["Mat`s Blog", "www.f5sites.com/startups/franciscomat-com/", "Personal blog of CEO and full stack developer", "Blog pessoal do CEO e desenvolvedor full stack", "www.franciscomat.com"],
	);
	$brasil_st = array(
		["F5Sites BR", "www.f5sites.com/startups-brasil/br-f5sites", "Startups services for Brazil", "Serviços para startups no brasil", "br.f5sites.com"],
		["Pomodoros BR", "www.f5sites.com/startups-brasil/pomodoros", "Open source online app, time tracker for projects", "App online de código-aberto para medir tempo de projetos", "www.pomodoros.com.br"],
		["LOJASDOMAGO", "www.f5sites.com/startups-brasil/lojasdomago", "Brazilian online store for costumer goods", "Loja de brindes produtos eletrônicos", "www.lojasdomago.com.br"],
		["Focalizador", "www.f5sites.com/startups-brasil/focalizador", "Gamefied online app for teams track projects time", "App online gamificado para times cronometrarem tempo de projetos", "www.focalizador.com.br"],
		["Blog do Mat", "www.f5sites.com/startups-brasil/br.franciscomat.com", "Brazilian version of personal blog of CEO and full stack developer", "Versão brasileira do blog pessoal do CEO e desenvolvedor full stack", "br.franciscomat.com"],);
	#["Startups", "www.f5sites.com/startups", "F5 Sites sponsored startups", "Conheça as startups patrocinadas pela F5Sites"],
	$under_development = array(
		["Instituto de Pesquisa", "www.f5sites.com/startups-under-development/instituto-de-pesquisa/", "Online self-hosted survey tool", "Ferramenta de survey online para pesquisa", "pesquisa.f5sites.com"],
		["Curso de WordPress", "www.f5sites.com/startups-under-development/cursowp/", "WordPress course for brazilian market", "Curso de WordPress para programadores", "www.cursowp.com.br"],
		["Treinamento em Foco", "www.f5sites.com/startups-under-development/treinamentoemfoco", "Learn how to be productive and relaxed", "Aprenda a usar seu tempo de forma produtiva e relaxante", "www.treinamentoemfoco.com.br"],
		["Hortaliças e Orgânicos", "www.f5sites.com/startups-under-development/hortical", "Green and sustaintability project sponsored by F5 Sites", "Projeto de reciclagem e produção de alimentos em garrafa PET", "hortical.f5sites.com"],
		["Pensamentos Curados", "www.f5sites.com/startups-under-development/pensamentos", "Newsletter for daily toughts", "Pensamentos diários de manhã cedo para você", "pensamentos.franciscomat.com"],
		["Mat's Portfolio", "www.f5sites.com/startups-under-development/portfolio", "Get in touch with Francisco works", "Portfolio de trabalhos do Francisco", "portfolio.franciscomat.com"],
		["F5 Source", "www.f5sites.com/startups-under-development/source", "Our open source open directory", "Fontes de código-aberto que usamos", "source.f5sites.com"]);
	#
	$in_project=array(

		["Ideias", "ideias.franciscomat.com"]);

	$discontinued=array(
		["ItapeMapa", "www.itapemapa.com.br"],
		["RedeMapas", "www.redemapas.com.br"],
		["Epizzaria", "www.epizzaria.com.br"],
		["www.grupof.com.br"],
		["www.qrlink.com.br"],
		["www.editoradeblogs.com.br"],
		["www.ondeabrir.com.br"],
		["www.contratador.com.br"],
		["F5 Projects", "projects.f5sites.com", "More information about our projects", "Mais informações sobre nossos projetos"]);
	
	#GENERATE VIEW
	$style = "";
	
	#
	if(get_option('stylesheet')=="twentyseventeen") {
		#franciscomat.com e br.franciscomat.com (extra position:relative;)
		#alternative	#$sn=$_SERVER['HTTP_HOST'];	#if($sn=="www.franciscomat.com")
		echo "<div class='divlinks' style='".$style."position:relative;'>"; 	
	} else  {
		echo "<div class='divlinks' style='".$style."'>"; 
	}
	
	?>
	<style type="text/css">
		.divlinks {
			    background: #222 none repeat scroll 0 0;
			    color: #666;
			    font-family: Open Sans,sans-serif;
			    font-size: 10px;
			    font-weight: 600;
			    min-height: 50px;
			    line-height: 15px;
			    padding-top: 5px;
			    text-transform: uppercase;
			    text-align: justify;
		}
		.alogo {
			float:left;
			height: 30px;
			margin-right: 4px;
		}
		.alogo:hover {
			background: #0365AD !important;
		}

		.alink {
			color:#CCC !important;
			font-family: Open Sans,sans-serif;
			text-decoration:none;
			font-weight: 100;
			text-decoration: none;
		}
		.alink:hover {
			color: #549ED1 !important;
			text-decoration: none;
		}
	</style>
	
	<?php
    if(function_exists('cp_displayPoints')) { ?>
		<div style="background: #982 none repeat scroll 0 0; border: 4px dashed #fff; border-radius: 4px; color: #fff; float: right; font-size: 14px; margin-left: 10px; min-height: 30px; min-width: 60px; padding: 4px;" data-toggle='popover' data-placement='top' title='"You F Cash balance, earn point using our services and spent in our virtual stores' data-trigger='hover' data-content='Portuguese: balanço F Cash, ganhe pontos usando nossos serviços e gaste em nossas lojas virtuais'>$ 
    	<?php cp_displayPoints(get_current_user_id()); ?>
    </div>
    <?php
	}
	?>
	<a href="https://www.f5sites.com/startups-navigator/" alt="F5 Sites International" class="alogo" data-toggle='popover' data-placement='top' title="F5 Sites Startups Navigator" data-trigger='hover' data-content="Portuguese: Navegador de Startups F5 Sites"><img src='<?php echo plugins_url( "f5sites-2016-logo-conceito(branco)2x-not.png", __FILE__ ); ?>' /></a>
	
	<a href="https://www.f5sites.com/startups/" data-toggle='popover' data-placement='top' title="F5 Sites global startups" data-trigger='hover' data-content="Portuguese: F5 Sites startups de classe global"><img src="<?php echo plugins_url("us.png",__FILE__);?>" style="display: inline;"></a>
	<?php fore($global_st);	?>
	
	<a href="https://br.f5sites.com/startups-brasil/" data-toggle='popover' data-placement='top' title="F5 Sites startups for Brazil" data-trigger='hover' data-content="Portuguese: F5 Sites startups para o Brasil"><img src="<?php echo plugins_url("br.png",__FILE__);?>" style="display: inline;"></a>
	<?php fore($brasil_st);	?>

	<a href="https://www.f5sites.com/f5-sites-under-development/" class="alink" data-toggle='popover' data-placement='top' title="F5 Sites startups Under development" data-trigger='hover' data-content="Portuguese: F5 Sites startups em desenvolvimento"><img src="<?php echo plugins_url("under-dev-icon.png",__FILE__);?>" style="display: inline;"></a>
	<?php fore($under_development);
	
	/*if(current_user_can('administrator')) {
		echo " In project: ";
		fore($in_project);
	}*/
	?>
	</div>
	<?php
}
function fore($names_links_array) {
	#STYLES	
	$s=$_SERVER['HTTP_HOST'];
	#echo $s;
	foreach ($names_links_array as $item) :
		$ns=$nt=$ntp='';
		if(isset($item[4])) {
			if ($item[4]==$s) {
				$ns=' style="color:#549ED1 !important;font-weight:100;" ';
				$nt=' . < you are here >';
				$ntp=' . < você está aqui >';
			#	echo "<span style='background:#0365AD;border-radius:3px;'>";
			
				#echo "<a $ns class='alink'>".$item[0]."</a>";
			}	
		}
		
			echo "<a href='https://".$item[1]."' $ns class='alink'  data-toggle='popover' data-placement='top' title='".$item[2].$nt."' data-trigger='hover' data-content='Portuguese: ".$item[3].$ntp."' >".$item[0]."</a>";
		#echo "F5 SITES WORDPRESS PHP WP MYSQL MANAGER";
		#echo "Settings: localdatabase name: <- PROCEED -> Remote name";
		#echo do_shortcode('');

		echo " | ";

	endforeach;
	?>

	<script type="text/javascript">
	if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(t){"use strict";var e=t.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1==e[0]&&9==e[1]&&e[2]<1||e[0]>3)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")}(jQuery),+function(t){"use strict";function e(e){return this.each(function(){var i=t(this),n=i.data("bs.tooltip"),s="object"==typeof e&&e;!n&&/destroy|hide/.test(e)||(n||i.data("bs.tooltip",n=new o(this,s)),"string"==typeof e&&n[e]())})}var o=function(t,e){this.type=null,this.options=null,this.enabled=null,this.timeout=null,this.hoverState=null,this.$element=null,this.inState=null,this.init("tooltip",t,e)};o.VERSION="3.3.7",o.TRANSITION_DURATION=150,o.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},o.prototype.init=function(e,o,i){if(this.enabled=!0,this.type=e,this.$element=t(o),this.options=this.getOptions(i),this.$viewport=this.options.viewport&&t(t.isFunction(this.options.viewport)?this.options.viewport.call(this,this.$element):this.options.viewport.selector||this.options.viewport),this.inState={click:!1,hover:!1,focus:!1},this.$element[0]instanceof document.constructor&&!this.options.selector)throw new Error("`selector` option must be specified when initializing "+this.type+" on the window.document object!");for(var n=this.options.trigger.split(" "),s=n.length;s--;){var r=n[s];if("click"==r)this.$element.on("click."+this.type,this.options.selector,t.proxy(this.toggle,this));else if("manual"!=r){var p="hover"==r?"mouseenter":"focusin",l="hover"==r?"mouseleave":"focusout";this.$element.on(p+"."+this.type,this.options.selector,t.proxy(this.enter,this)),this.$element.on(l+"."+this.type,this.options.selector,t.proxy(this.leave,this))}}this.options.selector?this._options=t.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},o.prototype.getDefaults=function(){return o.DEFAULTS},o.prototype.getOptions=function(e){return e=t.extend({},this.getDefaults(),this.$element.data(),e),e.delay&&"number"==typeof e.delay&&(e.delay={show:e.delay,hide:e.delay}),e},o.prototype.getDelegateOptions=function(){var e={},o=this.getDefaults();return this._options&&t.each(this._options,function(t,i){o[t]!=i&&(e[t]=i)}),e},o.prototype.enter=function(e){var o=e instanceof this.constructor?e:t(e.currentTarget).data("bs."+this.type);return o||(o=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,o)),e instanceof t.Event&&(o.inState["focusin"==e.type?"focus":"hover"]=!0),o.tip().hasClass("in")||"in"==o.hoverState?void(o.hoverState="in"):(clearTimeout(o.timeout),o.hoverState="in",o.options.delay&&o.options.delay.show?void(o.timeout=setTimeout(function(){"in"==o.hoverState&&o.show()},o.options.delay.show)):o.show())},o.prototype.isInStateTrue=function(){for(var t in this.inState)if(this.inState[t])return!0;return!1},o.prototype.leave=function(e){var o=e instanceof this.constructor?e:t(e.currentTarget).data("bs."+this.type);return o||(o=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,o)),e instanceof t.Event&&(o.inState["focusout"==e.type?"focus":"hover"]=!1),o.isInStateTrue()?void 0:(clearTimeout(o.timeout),o.hoverState="out",o.options.delay&&o.options.delay.hide?void(o.timeout=setTimeout(function(){"out"==o.hoverState&&o.hide()},o.options.delay.hide)):o.hide())},o.prototype.show=function(){var e=t.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(e);var i=t.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(e.isDefaultPrevented()||!i)return;var n=this,s=this.tip(),r=this.getUID(this.type);this.setContent(),s.attr("id",r),this.$element.attr("aria-describedby",r),this.options.animation&&s.addClass("fade");var p="function"==typeof this.options.placement?this.options.placement.call(this,s[0],this.$element[0]):this.options.placement,l=/\s?auto?\s?/i,a=l.test(p);a&&(p=p.replace(l,"")||"top"),s.detach().css({top:0,left:0,display:"block"}).addClass(p).data("bs."+this.type,this),this.options.container?s.appendTo(this.options.container):s.insertAfter(this.$element),this.$element.trigger("inserted.bs."+this.type);var h=this.getPosition(),f=s[0].offsetWidth,c=s[0].offsetHeight;if(a){var u=p,d=this.getPosition(this.$viewport);p="bottom"==p&&h.bottom+c>d.bottom?"top":"top"==p&&h.top-c<d.top?"bottom":"right"==p&&h.right+f>d.width?"left":"left"==p&&h.left-f<d.left?"right":p,s.removeClass(u).addClass(p)}var v=this.getCalculatedOffset(p,h,f,c);this.applyPlacement(v,p);var g=function(){var t=n.hoverState;n.$element.trigger("shown.bs."+n.type),n.hoverState=null,"out"==t&&n.leave(n)};t.support.transition&&this.$tip.hasClass("fade")?s.one("bsTransitionEnd",g).emulateTransitionEnd(o.TRANSITION_DURATION):g()}},o.prototype.applyPlacement=function(e,o){var i=this.tip(),n=i[0].offsetWidth,s=i[0].offsetHeight,r=parseInt(i.css("margin-top"),10),p=parseInt(i.css("margin-left"),10);isNaN(r)&&(r=0),isNaN(p)&&(p=0),e.top+=r,e.left+=p,t.offset.setOffset(i[0],t.extend({using:function(t){i.css({top:Math.round(t.top),left:Math.round(t.left)})}},e),0),i.addClass("in");var l=i[0].offsetWidth,a=i[0].offsetHeight;"top"==o&&a!=s&&(e.top=e.top+s-a);var h=this.getViewportAdjustedDelta(o,e,l,a);h.left?e.left+=h.left:e.top+=h.top;var f=/top|bottom/.test(o),c=f?2*h.left-n+l:2*h.top-s+a,u=f?"offsetWidth":"offsetHeight";i.offset(e),this.replaceArrow(c,i[0][u],f)},o.prototype.replaceArrow=function(t,e,o){this.arrow().css(o?"left":"top",50*(1-t/e)+"%").css(o?"top":"left","")},o.prototype.setContent=function(){var t=this.tip(),e=this.getTitle();t.find(".tooltip-inner")[this.options.html?"html":"text"](e),t.removeClass("fade in top bottom left right")},o.prototype.hide=function(e){function i(){"in"!=n.hoverState&&s.detach(),n.$element&&n.$element.removeAttr("aria-describedby").trigger("hidden.bs."+n.type),e&&e()}var n=this,s=t(this.$tip),r=t.Event("hide.bs."+this.type);return this.$element.trigger(r),r.isDefaultPrevented()?void 0:(s.removeClass("in"),t.support.transition&&s.hasClass("fade")?s.one("bsTransitionEnd",i).emulateTransitionEnd(o.TRANSITION_DURATION):i(),this.hoverState=null,this)},o.prototype.fixTitle=function(){var t=this.$element;(t.attr("title")||"string"!=typeof t.attr("data-original-title"))&&t.attr("data-original-title",t.attr("title")||"").attr("title","")},o.prototype.hasContent=function(){return this.getTitle()},o.prototype.getPosition=function(e){e=e||this.$element;var o=e[0],i="BODY"==o.tagName,n=o.getBoundingClientRect();null==n.width&&(n=t.extend({},n,{width:n.right-n.left,height:n.bottom-n.top}));var s=window.SVGElement&&o instanceof window.SVGElement,r=i?{top:0,left:0}:s?null:e.offset(),p={scroll:i?document.documentElement.scrollTop||document.body.scrollTop:e.scrollTop()},l=i?{width:t(window).width(),height:t(window).height()}:null;return t.extend({},n,p,l,r)},o.prototype.getCalculatedOffset=function(t,e,o,i){return"bottom"==t?{top:e.top+e.height,left:e.left+e.width/2-o/2}:"top"==t?{top:e.top-i,left:e.left+e.width/2-o/2}:"left"==t?{top:e.top+e.height/2-i/2,left:e.left-o}:{top:e.top+e.height/2-i/2,left:e.left+e.width}},o.prototype.getViewportAdjustedDelta=function(t,e,o,i){var n={top:0,left:0};if(!this.$viewport)return n;var s=this.options.viewport&&this.options.viewport.padding||0,r=this.getPosition(this.$viewport);if(/right|left/.test(t)){var p=e.top-s-r.scroll,l=e.top+s-r.scroll+i;p<r.top?n.top=r.top-p:l>r.top+r.height&&(n.top=r.top+r.height-l)}else{var a=e.left-s,h=e.left+s+o;a<r.left?n.left=r.left-a:h>r.right&&(n.left=r.left+r.width-h)}return n},o.prototype.getTitle=function(){var t,e=this.$element,o=this.options;return t=e.attr("data-original-title")||("function"==typeof o.title?o.title.call(e[0]):o.title)},o.prototype.getUID=function(t){do t+=~~(1e6*Math.random());while(document.getElementById(t));return t},o.prototype.tip=function(){if(!this.$tip&&(this.$tip=t(this.options.template),1!=this.$tip.length))throw new Error(this.type+" `template` option must consist of exactly 1 top-level element!");return this.$tip},o.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},o.prototype.enable=function(){this.enabled=!0},o.prototype.disable=function(){this.enabled=!1},o.prototype.toggleEnabled=function(){this.enabled=!this.enabled},o.prototype.toggle=function(e){var o=this;e&&(o=t(e.currentTarget).data("bs."+this.type),o||(o=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,o))),e?(o.inState.click=!o.inState.click,o.isInStateTrue()?o.enter(o):o.leave(o)):o.tip().hasClass("in")?o.leave(o):o.enter(o)},o.prototype.destroy=function(){var t=this;clearTimeout(this.timeout),this.hide(function(){t.$element.off("."+t.type).removeData("bs."+t.type),t.$tip&&t.$tip.detach(),t.$tip=null,t.$arrow=null,t.$viewport=null,t.$element=null})};var i=t.fn.tooltip;t.fn.tooltip=e,t.fn.tooltip.Constructor=o,t.fn.tooltip.noConflict=function(){return t.fn.tooltip=i,this}}(jQuery),+function(t){"use strict";function e(e){return this.each(function(){var i=t(this),n=i.data("bs.popover"),s="object"==typeof e&&e;!n&&/destroy|hide/.test(e)||(n||i.data("bs.popover",n=new o(this,s)),"string"==typeof e&&n[e]())})}var o=function(t,e){this.init("popover",t,e)};if(!t.fn.tooltip)throw new Error("Popover requires tooltip.js");o.VERSION="3.3.7",o.DEFAULTS=t.extend({},t.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),o.prototype=t.extend({},t.fn.tooltip.Constructor.prototype),o.prototype.constructor=o,o.prototype.getDefaults=function(){return o.DEFAULTS},o.prototype.setContent=function(){var t=this.tip(),e=this.getTitle(),o=this.getContent();t.find(".popover-title")[this.options.html?"html":"text"](e),t.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof o?"html":"append":"text"](o),t.removeClass("fade top bottom left right in"),t.find(".popover-title").html()||t.find(".popover-title").hide()},o.prototype.hasContent=function(){return this.getTitle()||this.getContent()},o.prototype.getContent=function(){var t=this.$element,e=this.options;return t.attr("data-content")||("function"==typeof e.content?e.content.call(t[0]):e.content)},o.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")};var i=t.fn.popover;t.fn.popover=e,t.fn.popover.Constructor=o,t.fn.popover.noConflict=function(){return t.fn.popover=i,this}}(jQuery);

		jQuery(function () {
		  jQuery('[data-toggle="popover"]').popover();
		})
	</script>
	<style type="text/css">
		*//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:hover,a:focus{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role="button"]{cursor:pointer}.tooltip{position:absolute;z-index:1070;display:block;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-weight:normal;letter-spacing:normal;line-break:auto;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;white-space:normal;word-break:normal;word-spacing:normal;word-wrap:normal;font-size:12px;opacity:0;filter:alpha(opacity=0)}.tooltip.in{opacity:.9;filter:alpha(opacity=90)}.tooltip.top{margin-top:-3px;padding:5px 0}.tooltip.right{margin-left:3px;padding:0 5px}.tooltip.bottom{margin-top:3px;padding:5px 0}.tooltip.left{margin-left:-3px;padding:0 5px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{bottom:0;right:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-weight:normal;letter-spacing:normal;line-break:auto;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;white-space:normal;word-break:normal;word-spacing:normal;word-wrap:normal;font-size:14px;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.2);box-shadow:0 5px 10px rgba(0,0,0,0.2)}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{margin:0;padding:8px 14px;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{border-width:10px;content:""}.popover.top>.arrow{left:50%;margin-left:-11px;border-bottom-width:0;border-top-color:#999;border-top-color:rgba(0,0,0,0.25);bottom:-11px}.popover.top>.arrow:after{content:" ";bottom:1px;margin-left:-10px;border-bottom-width:0;border-top-color:#fff}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-left-width:0;border-right-color:#999;border-right-color:rgba(0,0,0,0.25)}.popover.right>.arrow:after{content:" ";left:1px;bottom:-10px;border-left-width:0;border-right-color:#fff}.popover.bottom>.arrow{left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,0.25);top:-11px}.popover.bottom>.arrow:after{content:" ";top:1px;margin-left:-10px;border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,0.25)}.popover.left>.arrow:after{content:" ";right:1px;border-right-width:0;border-left-color:#fff;bottom:-10px}.clearfix:before,.clearfix:after{content:" ";display:table}.clearfix:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}.pull-right{float:right !important}.pull-left{float:left !important}.hide{display:none !important}.show{display:block !important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none !important}.affix{position:fixed}
	</style>
	<?php
}
