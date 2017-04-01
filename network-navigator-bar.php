<?php
/* Plugin Name: Network Navigator Bar
Plugin Description: Just put it on mu-plugins of each wpmu install and configure e style it editing the single file php code, made to be simple and for programmers (old multi-network-integrated-bar). WordPress F5 Sites DEV projects. 
Plugin URI: www.f5sites.com/network-navigator-bar
Plugin Author: Francisco Matelli Matulovic
Author URI: www.franciscomat.com/wordpress
Tags: mu-plugins, */

add_action("wp_footer", "mnib_activate");

function mnib_activate() {
	$active_links = array("grupof.com.br", "f5sites.com", "franciscomat.com", "pomodoros.com.br", "itapemapa.com.br", "redemapas.com.br", "focalizador.com.br", "projectimer.com", "ondeabrir.com.br", "cursowp.com.br", "treinamentoemfoco.com.br", "qrlink.com.br", "editoradeblogs.com.br");
	$a_style = 'style="color:#FFF;font-family: Open Sans,sans-serif;text-decoration:none;"';
	$div_style = 'style="background: #006599 !important;color:#FFF;font-family: Open Sans,sans-serif;z-index:9999;font-size: 10px;padding-top:5px;"';
	echo "<div ${div_style}'>"; 
	echo "F5 Sites Network ";
	foreach ($active_links as $link) :
		echo " | <a href=http://$link ${a_style}>$link</a>";
	endforeach;
	echo "</p>";
}
?>
