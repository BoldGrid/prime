<?php
/**
 * Entry Header Template
 *
 * This file contains the markup for the default entry header.
 *
 * @package Prime
 */

the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );