<?php
/* 
Plugin Name: F5 Sites | Footer Bar
Plugin URI: https://www.f5sites.com/software/wordpress/f5sites-footer-bar/
Plugin Description: Just put it on mu-plugins and style it editing the single file php code, made to be simple for developers. WordPress F5 Sites DEV projects. 
Author: Francisco Matelli Matulovic
Author URI: https://www.franciscomat.com/
License: GPLv3
Tags: mu-plugins, notice bars */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action('wp_enqueue_scripts', 'load_scritps_footer');
//add_action("wp_footer", "generate_footer", 12, 2);
add_action("wp_head", "generate_footer", 12, 2);

function generate_footer() {
	if(true!=false) {
		?>
		<nav class="navbar navbar-default">
  <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a href="https://www.f5sites.com/startups-navigator/" class="alogo navbar-brand" data-toggle='popover' data-placement='bottom' title="F5 Sites Startups Navigator" data-trigger='hover' data-content="Portuguese: Navegador de Startups F5 Sites"><img src='<?php echo plugins_url( "f5sites.com-logo.png", __FILE__ ); ?>' alt="F5 Sites" /></a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <ul class="nav navbar-nav">
		<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		<li><a href="#">Link</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Separated link</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">One more separated link</a></li>
		  </ul>
		</li>
	  </ul>
	  <form class="navbar-form navbar-left">
		<div class="form-group">
		  <input type="text" class="form-control" placeholder="Search">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	  </form>
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="#">Link</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Separated link</a></li>
		  </ul>
		</li>
	  </ul>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		<?php
	} else {

	
	$all_startups = array(
	["F5 Sites", "f5sites.com", "Hospedagem e desenvolvimento profissional para empresas", "Hosting and professional development for companies"],
	["CursoWP", "cursowp.com.br", "Curso de WordPress para programadores", "WordPress course for brazilian market"],
	["Pomodoros", "pomodoros.com.br", "App para medir tempo de projetos", "Online time tracker for projects"],
	["Treinamento em Foco", "treinamentoemfoco.com.br", "Treinamentom em Foco: Você e seu time mais produtivos do que nunca", "Focus Training: You and your team more productive than ever"],
	#["LOJA", "www.lojasdomago.com.br", "Loja de brindes e produtos eletrônicos", "Gift & Electronics Store"],
	["Francisco Mat", "franciscomat.com", "Blog do CEO e dev Francisco Mat", "Blog of CEO and dev Francisco mat"],
	);
	?>
	<style type="text/css">
		.row-container {
			background: #222 none repeat scroll 0 0;
			font-family: open_sansregular,sans-serif;
			min-height: 34px;
			color: #666;
			padding-top: 4px;
			background: #e6e6e6; /*#ccc;*/
			font-size: 13px;
			border-bottom: 6px solid #e6e6e6;
		}
		.row-container .popover {
			text-align: center;
		}
		.row-container .popover h3 {
			font-family: Arial !important;
			color: #333 !important;
			font-weight: normal;
		}
		.row-container-twentyseventeen {
			width: 100%;
			position: absolute;
			z-index: 99;
		}
		.showed-links {
			line-height: 24px;
			float: left;
		}
		.divlinks {
			color: #666;
			font-family: open_sansregular,sans-serif;
			font-size: 12px;
			line-height: 32px;
			font-weight: 100;
			text-transform: uppercase;
			text-align: justify;
		}
		.alogo {
			float:left;
			height: 34px;
			margin-top: -6px;
			background: #e6e6e6;/*024779*/
			overflow: hidden;
			color: #222 !important;
			min-width: 100px;
			line-height: 35px;
		}
		.alogo img {
			max-width: 66%;
			margin: 2% 0 0 15%;
		}

		.alink {
			color:#666 !important;
			font-family: open_sansregular,sans-serif;
			text-decoration:none;
			font-weight: 100;
			text-decoration: none;
			letter-spacing: -1px;
			font-weight: 600;
		}
		.alink:hover {
			color: #03659c !important;
			text-decoration: none;
		}
		.separator {
			-moz-transform: rotate(-30deg);
		    -ms-transform: rotate(-30deg);
		    -o-transform: rotate(-30deg);
		    -webkit-transform: rotate(-30deg);
		    transform: rotate(-30deg);
		    color: #AAA;
		    margin: 0 2px;		 
		}
		.aditional-links {
			background-color: #111;
			height: 40px;
			left: 110px;
			padding: 10px;
			position: absolute;
			top: -40px;
			display: none;
			min-width: 490px;
		}
		.contain-languages a {
			float: right;
			margin: 0 4px;
			color: #222;
			line-height: 22px;
			padding: 1px 6px 3px;
		}
		.contain-languages a:hover {
			background: #F9F9F9;
		}
		.lang-current {
			padding: 3px 6px;
			background: #F2F2F2;
			display: inline-block;
		}
		/***/
		.icon {
			display: inline-block;
			width: 1em;
			height: 1em;
			stroke-width: 0;
			stroke: currentColor;
			fill: currentColor;
		}
		@media(max-width: 768px) {
			.hidden-xs {
				display: none;
			}
		}
	</style>

	<?php if(get_option('stylesheet')=="franciscomat-twentyseventeen") { ?>
		<div class='row-container row-container-twentyseventeen'> 	
	<?php } else  { ?>
		<div class='row-container'>
	<?php } ?>

	<?php
    if(function_exists('cp_displayPoints')) { ?>
		<div style="background: #982 none repeat scroll 0 0; border: 4px dashed #fff; border-radius: 4px; color: #fff; float: right; font-size: 14px; margin-left: 10px; min-height: 30px; min-width: 60px; padding: 4px;" data-toggle='popover' data-placement='top' title='"You F Cash balance, earn point using our services and spent in our virtual stores' data-trigger='hover' data-content='Portuguese: balanço F Cash, ganhe pontos usando nossos serviços e gaste em nossas lojas virtuais'>$ 
    	<?php cp_displayPoints(get_current_user_id()); ?>
    	</div> <?php
	} ?>


	
	<span class="showed-links hidden-xs d-none d-sm-block">
		
		<?php fore($all_startups);	?>
	</span>
	
	<div class="hidden-sm hidden-xs d-none d-sm-block pull-right" style="padding-right: 10px;">
		<?php
		if(!class_exists("WC_Geolocation") || !isset($location)) { ?>
			<script type="text/javascript">
				jQuery( document ).ready(function() {
					jQuery.get("https://ipinfo.io?token=e7e9316dfdc5fa", function (response) {
						console.log("response", response);
						if(jQuery("#user_location_country").text()!=response.country) {
							//alert("geolocated ip from remote is different then woocommerce");
						}
						jQuery("#user_location_city").text(response.city+", ");
						jQuery("#user_location_region").text(response.region+", ");
						jQuery("#user_location_country").text(response.country);
					}, "jsonp");
				})
			</script>
			
		<?php } ?>
		<img src="<?php echo plugins_url('assets/location-icon-map-png-location-24-128.png', __FILE__) ?>"  alt="Loc:" style="float: left; margin-top: 3px;">
		<span id="user_location_city"></span>
		<span id="user_location_region"></span>
		<span id="user_location_country">
			<?php if(isset($location['country']))
				echo $location['country'];
			else
				echo "Unkown location";
			?>
		</span>
	</div>

	<?php if(function_exists('smartlang_show_lang_options')) { ?>
		<div class="contain-languages pull-right">
			<span class="lang-current">
				<?php if(function_exists("smartlang_generate_flag_links_current")) {
					smartlang_generate_flag_links_current(false);
				} else { ?>
					<img src="<?php echo plugins_url("assets/br.png",__FILE__);?>" style="display: inline;" alt="br">
				<?php } ?>
			</span>
			<?php smartlang_show_lang_options(true); ?>
		</div>
	<?php } else { ?>
		<img src="<?php echo plugins_url("assets/br.png",__FILE__);?>" style="display: inline;" alt="br">
	<?php } ?>


	</div>
	<script type="text/javascript">
		jQuery(function () {
			jQuery('[data-toggle="popover"]').popover();

			jQuery(".showed-links img").hover(function(){
				jQuery(".aditional-links").show(200);
			})
			jQuery(".row-container").mouseleave(function() {
				jQuery(".aditional-links").hide(200);
			});
			
		})
	</script>
	<?php
	}
}

function fore($names_links_array) {
	$s=$_SERVER['HTTP_HOST'];
	$i=0;
	foreach ($names_links_array as $item) :
		$ns=$nt=$ntp='';
		if(isset($item[1])) {
			$s1 = rtrim($s, '/');
			if(dirname($item[1])==".")
				$s2 = ($item[1]);
			else
				$s2 = dirname($item[1]);
			#var_dump($s1);
			#var_dump($item[1]);
			#var_dump($s2);
			#die;
			//if ($s1==$s2) {
			if(strpos($s, $item[1])) {
				$ns=' style="color:#03659C !important;" ';#font-weight:100;#549ED1
				$nt=' <you are here>';
				$ntp=' <você está aqui>';
			#	echo "<span style='background:#0365AD;border-radius:3px;'>";
			
				#echo "<a $ns class='alink'>".$item[0]."</a>";
			}	
		}
		#if($i>0)
			echo " <span class='separator'>|</span> ";
		
		echo "<a href='https://www.".$item[1]."' $ns class='alink'  data-toggle='popover' data-placement='bottom' title='".$item[2].$ntp."' data-trigger='hover' data-content='".$item[3].$nt."' >".$item[0]."</a>";
		$i++;
		#echo "F5 SITES WORDPRESS PHP WP MYSQL MANAGER";
		#echo "Settings: localdatabase name: <- PROCEED -> Remote name";
		#echo do_shortcode('');
	endforeach;
	?>
	
	<?php
}

function load_scritps_footer() {
	wp_enqueue_script('footerjs', plugins_url('/assets/bootstrap.min.js', __FILE__), '', time() );
	wp_enqueue_style('footercss', plugins_url('/assets/bootstrap.min.css', __FILE__), '', time() );
	wp_enqueue_style('footercss', plugins_url('/assets/font.css', __FILE__), '', time() );
}
/*
$under_development = array(
		#["LOJASDOMAGO", "www.f5sites.com/startups-brasil/lojasdomago", "Brazilian online store for costumer goods", "Loja de brindes produtos eletrônicos", "www.lojasdomago.com.br"],
		["Focalizador", "www.f5sites.com/startups-brasil/focalizador", "Gamefied online app for teams track projects time", "App online gamificado para times cronometrarem tempo de projetos", "www.focalizador.com.br"],
		["Instituto de Pesquisa", "www.f5sites.com/startups-under-development/instituto-de-pesquisa/", "Online self-hosted survey tool", "Ferramenta de survey online para pesquisa", "pesquisa.f5sites.com"],
		
		["Treinamento em Foco", "www.f5sites.com/startups-under-development/treinamentoemfoco", "Learn how to be productive and relaxed", "Aprenda a usar seu tempo de forma produtiva e relaxante", "www.treinamentoemfoco.com.br"],
		["Hortaliças e Orgânicos", "www.f5sites.com/startups-under-development/hortical", "Green and sustaintability project sponsored by F5 Sites", "Projeto de reciclagem e produção de alimentos em garrafa PET", "hortical.f5sites.com"],
		["Pensamentos Curados", "www.f5sites.com/startups-under-development/pensamentos-curados", "Newsletter for daily toughts", "Pensamentos diários de manhã cedo para você", "pensamentos.franciscomat.com"]#,
		#["Mat's Portfolio", "www.f5sites.com/startups-under-development/portfolio", "Get in touch with Francisco works", "Portfolio de trabalhos do Francisco", "portfolio.franciscomat.com"],
		#["F5 Source", "www.f5sites.com/startups-under-development/source", "Our open source open directory", "Fontes de código-aberto que usamos", "source.f5sites.com"]
		);
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
	


$global_st = array(
		["F5Sites", "www.f5sites.com/startups/f5sites/", "IT Services For Global Startups", "Serviços para startups globais", "www.f5sites.com"],
		["Francisco Mat", "www.f5sites.com/startups/franciscomat-com/", "Personal blog of CEO and full stack developer", "Blog pessoal do CEO e desenvolvedor full stack", "www.franciscomat.com"],
		["Pomodoros USA", "www.f5sites.com/startups/pomodoros-usa/", "Open source online app, time tracker for projects", "App online de código-aberto para medir tempo de projetos", "www.pomodoros.com.br"],
		["Projectimer", "www.f5sites.com/startups/projectimer/", "App for teams and startups track project time", "App para times cronometrarem tempo de projeto", "www.projectimer.com"],
	);
	$brasil_st = array(
		["BRF5Sites", "www.f5sites.com/startups-brasil/br-f5sites", "Startups services for Brazil", "Serviços para startups no brasil", "br.f5sites.com"],
		["BRFrancisco Mat", "www.f5sites.com/startups-brasil/br.franciscomat.com", "Brazilian version of personal blog of CEO and full stack developer", "Versão brasileira do blog pessoal do CEO e desenvolvedor full stack", "br.franciscomat.com"],
		["BR Pomodoros", "www.f5sites.com/startups-brasil/pomodoros", "Open source online app, time tracker for projects", "App online de código-aberto para medir tempo de projetos", "www.pomodoros.com.br"],
		["Curso de WordPress", "www.f5sites.com/startups-under-development/cursowp/", "WordPress course for brazilian market", "Curso de WordPress para programadores", "www.cursowp.com.br"],
		
	);
	#["Startups", "www.f5sites.com/startups", "F5 Sites sponsored startups", "Conheça as startups patrocinadas pela F5Sites"],

	#DOMAIN GROUPS
	$global_st = array(
		["F5Sites", "www.f5sites.com", "IT Services For Global Startups", "Serviços para startups globais", "www.f5sites.com"],
		["Francisco Mat", "www.franciscomat.com", "Personal blog of CEO and full stack developer", "Blog pessoal do CEO e desenvolvedor full stack", "www.franciscomat.com"],
		["Pomodoros Global", "www.pomodoros.com.br/?lang=en_US", "Open source online app, time tracker for projects", "App online de código-aberto para medir tempo de projetos", "www.pomodoros.com.br"],
		#["Projectimer", "www.f5sites.com/startups/projectimer/", "App for teams and startups track project time", "App para times cronometrarem tempo de projeto", "www.projectimer.com"],
	);
<?php 
	$location="";
	#var_dump(class_exists("WC_Geolocation"));
	if(class_exists("WC_Geolocation")) {
		$location = WC_Geolocation::geolocate_ip();
		#var_dump($location);
		//$location['city'].$location['region']
		$local = $location['country'];
	} /*else {
		$local = "US";
		#die;
	}*
	if(!class_exists("WC_Geolocation") || $location["city"]=="") {
		#if(gethostname()!="note-samsung") ?>
		<script type="text/javascript">
		//jQuery( document ).ready(function() {
			jQuery.get("https://ipinfo.io?token=e7e9316dfdc5fa", function (response) {
				//alert(response.city);
			    //console.log("IP: " + response.ip);
				//console.log("Location: " + response.city + ", " + response.region);
				if(jQuery("#user_location_country").text()!=response.country) {
					//alert("geolocated ip from remote is different then woocommerce");
				}
				jQuery("#user_location_city").text(response.city);
				jQuery("#user_location_region").text(response.region);
				jQuery("#user_location_country").text(response.country);
				
			}, "jsonp");
		//}
		</script>
		
	<?php }

	if(!$local) {
		if(function_exists("locale_accept_from_http"))
		$local = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
		else
		$local = "en_US";
	}
	
	#if($local=="PT" || $local=="BR" || $local=="pt" || $local=="pt_BR" || $local=="pt_PT") { ?>
		<!--a href="https://br.f5sites.com/startups-brasil/" data-toggle='popover' data-placement='top' title="F5 Sites startups for Brazil" data-trigger='hover' data-content="Portuguese: F5 Sites startups para o Brasil"></a-->

		<?php /* } else { ?>
	<span class="aditional-links">
		<img src="<?php echo plugins_url("assets/us.png",__FILE__);?>" style="display: inline;" alt="US">
		<?php fore($all_startups);	?>
	</span>
		<!--a href="https://www.f5sites.com/startups/" data-toggle='popover' data-placement='top' title="F5 Sites global startups" data-trigger='hover' data-content="Portuguese: F5 Sites startups de classe global"></a-->
		<div class="showed-links">
			<img src="<?php echo plugins_url("assets/us.png",__FILE__);?>" style="display: inline;" alt="US">
			<?php fore($all_startups);	?>
		</div>
		<div class="aditional-links">
			<img src="<?php echo plugins_url("assets/br.png",__FILE__);?>" style="display: inline;" alt="BR">
			<?php fore($all_startups);	?>
		</div>
	<?php }	*/ 
	#var_dump($local);die;
	/*###############
	<a href="https://www.f5sites.com/startups-under-development/" class="alink" data-toggle='popover' data-placement='top' title="F5 Sites startups Under development" data-trigger='hover' data-content="Portuguese: F5 Sites startups em desenvolvimento"><img src="<?php echo plugins_url("under-dev-icon.png",__FILE__);?>" style="display: inline;"></a>
	<?php fore($under_development);
	
	/*if(current_user_can('administrator')) {
		echo " In project: ";
		fore($in_project);
	*/