<?php
/*
* Plugin Name: GravityView - Use Alternate DataTables Sources
* Description: Use local files to load DataTables JS
* Version: 1.0
* Author: Katz Web Services, Inc.
* Author URI: https://gravityview.co
*/

class Replace_GV_DataTables_Scripts {

	function init() {
		new Replace_GV_DataTables_Scripts;
	}

	function __construct() {

		// datatables
		add_filter('gravityview_datatables_script_src', array( $this, 'datatables_js') );
		add_filter('gravityview_datatables_style_src', array( $this, 'datatables_css') );

		// tabletools
		add_filter('gravityview_dt_tabletools_script_src', array( $this, 'tabletools_js' ) );
		add_filter('gravityview_dt_tabletools_style_src', array( $this, 'tabletools_css' ) );

		// scroller
		add_filter('gravityview_dt_scroller_script_src', array( $this, 'scroller_js' ) );
		add_filter('gravityview_dt_scroller_style_src', array( $this, 'scroller_css' ) );

		// fixedColumns
		add_filter('gravityview_dt_fixedcolumns_script_src', array( $this, 'fixedcolumns_js' ) );
		add_filter('gravityview_dt_fixedcolumns_style_src', array( $this, 'fixedcolumns_css' ) );

		// fixedHeader
		add_filter('gravityview_dt_fixedheader_script_src', array( $this, 'fixedheader_js' ) );
		add_filter('gravityview_dt_fixedheader_style_src', array( $this, 'fixedheader_css' ) );

		// responsive
		add_filter('gravityview_dt_responsive_script_src', array( $this, 'responsive_js' ) );
		add_filter('gravityview_dt_responsive_style_src', array( $this, 'responsive_css' ) );

	}

	// --- datatables --- //
	function datatables_js() {
		return plugins_url( 'js/jquery.dataTables.min.js', __FILE__ );
	}

	function datatables_css() {
		return plugins_url( 'css/jquery.dataTables.min.css', __FILE__ );
	}

	// --- tabletools --- //
	function tabletools_js() {
		return plugins_url( 'js/dataTables.tableTools.min.js', __FILE__ );
	}

	function tabletools_css() {
		return plugins_url( 'css/dataTables.tableTools.min.css', __FILE__ );
	}

	// --- scroller --- //
	function scroller_js() {
		return plugins_url( 'js/dataTables.scroller.min.js', __FILE__ );
	}

	function scroller_css() {
		return plugins_url( 'css/dataTables.scroller.min.css', __FILE__ );
	}

	// --- fixedColumns --- //
	function fixedcolumns_js() {
		return plugins_url( 'js/dataTables.fixedColumns.min.js', __FILE__ );
	}

	function fixedcolumns_css() {
		return plugins_url( 'css/dataTables.fixedColumns.min.css', __FILE__ );
	}

	// --- fixedHeader --- //
	function fixedheader_js() {
		return plugins_url( 'js/dataTables.fixedHeader.min.js', __FILE__ );
	}

	function fixedheader_css() {
		return plugins_url( 'css/dataTables.fixedHeader.min.css', __FILE__ );
	}

	// --- responsive --- //
	function responsive_js() {
		return plugins_url( 'js/dataTables.responsive.min.js', __FILE__ );
	}

	function responsive_css() {
		return plugins_url( 'css/dataTables.responsive.css', __FILE__ );
	}



}

add_action( 'init', array('Replace_GV_DataTables_Scripts', 'init' ) );