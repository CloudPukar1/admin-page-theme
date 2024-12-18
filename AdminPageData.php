<?php
/*
Template Name: AdminPageData
*/
$options = get_option( 'pukar_example_plugin_options' ); ?>
API Key: <?php echo $options[ 'api_key' ]; ?>
Results Limit: <?php echo $options[ 'results_limit' ]; ?>
Start Date : <?php echo $options[ 'start_date' ]; ?>
