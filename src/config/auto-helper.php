<?php

	return [

		// Specify path to your helper directory
		// By default it will be app/Helpers
		// meaning it'll reside in your app directory
		'helper_path'	=>	function_exists('env') ? env('HELPER_PATH', 'app/Helpers') : ''

	];
