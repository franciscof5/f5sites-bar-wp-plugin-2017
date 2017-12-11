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
	$most_mature = array("projects.f5sites.com", "br.f5sites.com", "www.f5sites.com", "br.franciscomat.com", "www.franciscomat.com");
	$under_development = array("pensamentos.franciscomat.com", "www.lojasdomago.com.br", "www.focalizador.com.br", "www.pomodoros.com.br", "www.itapemapa.com.br", "hortical.f5sites.com", "www.cursowp.com.br" );
	$in_project=array("www.projectimer.com", "www.treinamentoemfoco.com.br", "www.redemapas.com.br", "www.epizzaria.com.br", "SUBSITES", "pensamentos.franciscomat.com", "portfolio.franciscomat.com", "pesquisa.franciscomat.com", "ideias.franciscomat.com");
	$archived=array("www.grupof.com.br" , "pesquisa.grupof.com.br", "www.qrlink.com.br", "www.editoradeblogs.com.br", "www.ondeabrir.com.br", "www.contratador.com.br");
	#improvisation
	$sn=$_SERVER['HTTP_HOST'];
	#if($sn=="www.franciscomat.com")
	#$div_style = 'style="background: #006599 !important;color:#CCC;font-family: Open Sans,sans-serif;z-index:9999;font-size: 10px;padding-top:5px;font-weight:600;margin-left:30%"';
	$startups_global = array("www.f5sites.com", "projects.f5sites.com", "www.franciscomat.com");
	$startups_brasil = array("br.f5sites.com", "br.franciscomat.com", "www.lojasdomago.com.br", "www.focalizador.com.br", "www.pomodoros.com.br", "www.itapemapa.com.br", "hortical.f5sites.com", "www.cursowp.com.br" );
	
	#GENERATE VIEW
	echo "<div style='background: #006599 !important;color:#CCC;font-family: Open Sans,sans-serif;font-size: 12px;padding-top:5px;font-weight:600;line-height:30px;position:relative;'>"; 
	#z-index:9999;
	echo "F5 Sites Network: ";
	fore($most_mature);
	echo " Under Development: ";
	fore($under_development);
	
	/*/echo "Global Startups: ";
	fore($startups_global);
	echo " Startups Brasil: ";
	fore($startups_brasil);*/
	if(current_user_can('administrator')) {
		echo "<hr />";
		echo " In project: ";
		fore($in_project);
		echo "<br />";
		echo " Archive: ";
		fore($archived);
	}
	#$active_links = array_merge($most_mature, $under_development);
	echo "</div>";
	echo "</p>";
}
function fore($whatar) {
	#STYLES	
	$a_style = 'style="color:#111;font-family: Open Sans,sans-serif;text-decoration:none;"';
	foreach ($whatar as $link) :
		$domain_parts = explode('.', $link);
		$linksw = ($domain_parts[0] == "www") ? $domain_parts[1] : $domain_parts[0];
		echo "<a href=http://$link ${a_style}>".$linksw." |</a>  ";
	endforeach;
}
