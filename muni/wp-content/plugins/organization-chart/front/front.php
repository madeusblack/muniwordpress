<?php 
class wpdevart_org_chart_front{
	private static $unique_prefix=0;
	
	private $tree;
	function __construct(){
		$this->call_filters();
	}
	
	/*############ Function for calling the filters ################*/	
	
	private function call_filters(){
		$this->include_files();		
		add_filter('wp_head',array($this,'include_scripts'),99);
		add_filter('wp_footer',array($this,'include_scripts'),99);		
		add_shortcode('wpda_org_chart', array($this,'shortcode'));	
		
	}
	
	/*############ Function for including the scripts ################*/	
	
	public function include_scripts(){
		wp_enqueue_style('wpdevart_org_chart_front_css',wpda_org_chart_plugin_url.'front/css/front_css.css');	
		wp_enqueue_script('wpdevart_org_chart_front_js',wpda_org_chart_plugin_url.'front/js/front_js.js');		
	}
	
	/*############ Function for including the files ################*/	
	
	private function include_files(){
		require_once(wpda_org_chart_plugin_path.'front/tree_class.php');
	}
	
	/*############ Function for the shortcode ################*/	
	
	public function shortcode($atts){
		$tree=new wpda_org_chart_front_tree_maker($atts);
		return $tree->controller();		
	}
}
?>