<?php
/*
Plugin Name: CI Mean calculator
Plugin URI: https://www.calculator.io/mean-calculator/
Description: The mean calculator or the average calculator helps you to get the average value of a data set. It divides the data values sum by the data values count to get the average (mean).
Version: 1.0.0
Author: Mean Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_mean_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Mean Calculator by www.calculator.io";

function display_calcio_ci_mean_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Mean Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_mean_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_mean_calculator', 'display_calcio_ci_mean_calculator' );