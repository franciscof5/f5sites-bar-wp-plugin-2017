<?php
/* 
Plugin Name: F5 Sites | Footer Bar
Plugin URI: https://www.f5sites.com/software/wordpress/f5sites-footer-bar/
Plugin Description: Just put it on mu-plugins and style it editing the single file php code, made to be simple for developers. WordPress F5 Sites DEV projects. 
Author: Francisco Matelli Matulovic
Author URI: https://www.franciscomat.com/
License: GPLv3
Tags: mu-plugins, notice bars */

add_action("wp_footer", "mnib_activate");

function mnib_activate() {
	#DOMAIN GROUPS
	$most_mature = array(
		
		["F5Sites Global", 		"www.f5sites.com"],
		["Startups", 			"www.f5sites.com/startups"],
		["BR F5Sites", 			"br.f5sites.com"],
		["Francisco Mat BR",	"br.franciscomat.com"],
		["Francisco Mat Global","www.franciscomat.com"],
		["Pomodoros", "www.pomodoros.com.br"]);
	#
	$under_development = array(
		["Instituto de Pesquisa",	"pesquisa.f5sites.com"],
		["Pensamentos Curados", 	"pensamentos.franciscomat.com"], 
		["Francisco Mat Portfolio", "portfolio.franciscomat.com"],
		["LOJASDOMAGO", 			"www.lojasdomago.com.br"],
		["Focalizador", 			"www.focalizador.com.br"],
		["Sistema Hortical", 		"hortical.f5sites.com"],
		["Curso de WordPress", 		"www.cursowp.com.br"]);
	#
	$in_project=array(
		["Projectimer", "www.projectimer.com"],
		["treinamento em foco", "www.treinamentoemfoco.com.br"],
		["Ideias", "ideias.franciscomat.com"]);

	$archived=array(
		["ItapeMapa", 				"www.itapemapa.com.br"],
		["", "www.redemapas.com.br"],
		["", "www.epizzaria.com.br"],
		"www.grupof.com.br" , "pesquisa.grupof.com.br", "www.qrlink.com.br", "www.editoradeblogs.com.br", "www.ondeabrir.com.br", "www.contratador.com.br");
	
	
	#$div_style = 'style="background: #006599 !important;color:#CCC;font-family: Open Sans,sans-serif;z-index:9999;font-size: 10px;padding-top:5px;font-weight:600;margin-left:30%"';
	$startups_global = array("www.f5sites.com", "projects.f5sites.com", "www.franciscomat.com");
	$startups_brasil = array("br.f5sites.com", "br.franciscomat.com", "www.lojasdomago.com.br", "www.focalizador.com.br", "www.pomodoros.com.br", "www.itapemapa.com.br", "hortical.f5sites.com", "www.cursowp.com.br" );
	
	#GENERATE VIEW
	$style = "
			";
	
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
		}
		.alogo {
			float:left;
			height: 30px;
		}
		.alogo:hover {
			background: #006599 !important;
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

	#F5 LOGO
	echo '<a href="https://www.f5sites.com" alt="F5 Sites International" class="alogo"><img src="' . plugins_url( 'f5sites-2016-logo-conceito(branco)2x-not.png', __FILE__ ) . '" ></a>';
	#LINKS
	#echo " : ";
	fore($most_mature);
	echo " Under Development: ";
	fore($under_development);
	
	/*/echo "Global Startups: ";
	fore($startups_global);
	echo " Startups Brasil: ";
	fore($startups_brasil);*/
	
	if(current_user_can('administrator')) {
		#return;
		#echo "<br />";
		echo " In project: ";
		fore($in_project);
		#echo "<br />";
		#echo " Archive: ";
		#fore($archived);
	}

	#$active_links = array_merge($most_mature, $under_development);
	echo "</div>";
	#echo "</p>";
}
function fore($names_links_array) {
	#STYLES	
	
	foreach ($names_links_array as $item) :
		echo "<a href='https://".$item[1]."'  class='alink'>".$item[0]." |</a>  ";
	endforeach;
	#echo "F5 SITES WORDPRESS PHP WP MYSQL MANAGER";
	#echo "Settings: localdatabase name: <- PROCEED -> Remote name";
	#echo do_shortcode('');
}
