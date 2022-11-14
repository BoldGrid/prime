<?php
/**
 * This file contains the "Learnig Resources" boxes markup displayed after Crio is activated.
 *
 * @package Prime
 * @since 2.0.0
 */

$box_a = '<div class="box-container box a">' .
'<div class="learning-item">' .
	'<div class="learning-image">' .
		'<svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element" style="opacity: 1; mix-blend-mode: normal; fill: rgb(249, 91, 38); width: 79px; height: 79px;">' .
			'<g>' .
				'<path xmlns:default="http://www.w3.org/2000/svg" d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z" style="fill: rgb(249, 91, 38);"></path>' .
			'</g>' .
		'</svg>' .
	'</div>' .
	'<div class="learning-text">' .
		'<h3>' . esc_html__( 'Crio Documentation and Tutorials', 'bgtfw' ) . '</h3>' .
		'<p>' . esc_html__( 'Step by Step tutorials and easy to follow documentation!', 'bgtfw' ) . '</p>' .
	'</div>' .
'</div>' .
'<p class="box">' .
	'<a href="http://boldgrid.com/support/boldgrid-crio" target="_blank" class="button button-secondary">' . esc_html__( 'Browse Docs', 'bgtfw' ) . '</a>' .
'</p>' .
'</div>';

$box_b = '<div class="box-container box b">' .
	'<div class="learning-item">' .
		'<div class="learning-image">' .
			'<svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element" style="opacity: 1; mix-blend-mode: normal; fill: rgb(249, 91, 38); width: 79px; height: 79px;">' .
				'<g>' .
					'<path xmlns:default="http://www.w3.org/2000/svg" d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.35-.11-.74-.03-1.02.24l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM19 12h2c0-4.97-4.03-9-9-9v2c3.87 0 7 3.13 7 7zm-4 0h2c0-2.76-2.24-5-5-5v2c1.66 0 3 1.34 3 3z" style="fill: rgb(249, 91, 38);"></path>' .
				'</g>' .
			'</svg>' .
		'</div>' .
		'<div class="learning-text">' .
			'<h3>' . esc_html__( '1 on 1 Support', 'bgtfw' ) . '</h3>' .
			'<p>' . esc_html__( 'Need help with Crio that you don\'t see in our Docs or user groups? Contact our Support Team (Premium Feature)', 'bgtfw' ) . '</p>' .
		'</div>' .
	'</div>' .
	'<p class="box">' .
		'<a href="https://www.boldgrid.com/central/account/help/premium" target="_blank" class="button button-secondary">' . esc_html__( 'Get Support', 'bgtfw' ) . '</a>' .
	'</p>' .
'</div>';

$box_c = '<div class="box-container box c">' .
	'<div class="learning-item">' .
		'<div class="learning-image">' .
			'<svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element" style="opacity: 1; mix-blend-mode: normal; fill: rgb(249, 91, 38); width: 82px; height: 82px;">' .
				'<g>' .
					'<path xmlns:default="http://www.w3.org/2000/svg" d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" style="fill: rgb(249, 91, 38);"></path>' .
				'</g>' .
			'</svg>' .
		'</div>' .
		'<div class="learning-text">' .
			'<h3>' . esc_html__( 'Team Orange', 'bgtfw' ) . '</h3>' .
			'<p>' . esc_html__( 'An active and helpful place to get answers and tips from users like you!', 'bgtfw' ) . '/p>' .
		'</div>' .
	'</div>' .
	'<p class="box">' .
		'<a href="https://www.facebook.com/groups/BGTeamOrange" target="_blank" class="button button-secondary">' . esc_html__( 'Join Us', 'bgtfw' ) . '</a>' .
	'</p>' .
'</div>';

return array(
	'docs_and_tutorials' => $box_a,
	'one_on_one_support' => $box_b,
	'team_orage'         => $box_c,
);
