<?php
/* Plugin Name: Network Navigator Bar
Plugin Description: Just put it on mu-plugins of each wpmu install and configure e style it editing the single file php code, made to be simple and for programmers (old multi-network-integrated-bar). WordPress F5 Sites DEV projects. 
Plugin URI: www.f5sites.com/network-navigator-bar
Plugin Author: Francisco Matelli Matulovic
Author URI: www.franciscomat.com/wordpress
Tags: mu-plugins, */


add_action("wp_footer", "mnib_activate");

function mnib_activate() {
	#DOMAIN GROUPS
	$most_mature = array("www.grupof.com.br", "www.f5sites.com", "br.f5sites.com", "www.franciscomat.com");
	$under_development = array("www.pomodoros.com.br", "www.itapemapa.com.br", "www.redemapas.com.br", "pesquisa.grupof.com.br", "www.cursowp.com.br");
	$in_project = array("www.focalizador.com.br", "www.projectimer.com", "www.ondeabrir.com.br", "www.treinamentoemfoco.com.br", "www.qrlink.com.br", "www.editoradeblogs.com.br");
	
	#STYLES	
	$div_style = 'style="background: #006599 !important;color:#CCC;font-family: Open Sans,sans-serif;z-index:9999;font-size: 10px;padding-top:5px;font-weight:600;"';
	
	#improvisation
	$sn=$_SERVER['HTTP_HOST'];
	#if($sn=="www.franciscomat.com")
	#$div_style = 'style="background: #006599 !important;color:#CCC;font-family: Open Sans,sans-serif;z-index:9999;font-size: 10px;padding-top:5px;font-weight:600;margin-left:30%"';
	
	
	#GENERATE VIEW
	echo "<div ${div_style}>"; 
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
	$a_style = 'style="color:#222;font-family: Open Sans,sans-serif;text-decoration:none;"';
	foreach ($whatar as $link) :
		$domain_parts = explode('.', $link);
		$linksw = ($domain_parts[0] == "www") ? $domain_parts[1] : $domain_parts[0];
		echo "<a href=http://$link ${a_style}>".$linksw." |</a>  ";
	endforeach;
}
?>
