<?php

use Automattic\Jetpack\Tracking as Tracks;

add_action( 'wp_enqueue_scripts', array( new Tracks( 'jetpack' ), 'enqueue_tracks_scripts' ) );
