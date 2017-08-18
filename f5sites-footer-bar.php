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
	$most_mature = array("www.grupof.com.br", "www.f5sites.com", "br.f5sites.com", "www.franciscomat.com");
	$under_development = array("www.pomodoros.com.br", "www.itapemapa.com.br", "hortical.f5sites.com", "www.cursowp.com.br" );
	#$in_project = array("www.focalizador.com.br", "www.projectimer.com", "www.ondeabrir.com.br", "www.treinamentoemfoco.com.br", "www.qrlink.com.br", "www.editoradeblogs.com.br");
	$in_project=array("pensamentos.franciscomat.com", "www.redemapas.com.br", "pesquisa.grupof.com.br");
	
	#improvisation
	$sn=$_SERVER['HTTP_HOST'];
	#if($sn=="www.franciscomat.com")
	#$div_style = 'style="background: #006599 !important;color:#CCC;font-family: Open Sans,sans-serif;z-index:9999;font-size: 10px;padding-top:5px;font-weight:600;margin-left:30%"';
	
	
	#GENERATE VIEW
	echo "<div style='background: #006599 !important;color:#CCC;font-family: Open Sans,sans-serif;z-index:9999;font-size: 12px;padding-top:5px;font-weight:600;line-height:30px;position:relative;'>"; 
	echo "F5 Sites Network: ";
	fore($most_mature);
	echo " Under Development: ";
	fore($under_development);
	if(current_user_can('administrator')) {
		echo " In project: ";
		fore($in_project);
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
?>
