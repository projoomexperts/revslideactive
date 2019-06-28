<?php

class Revslideactive_Deactivator {

	public static function deactivate() {
		
		update_option('revslider-valid', 'false');
		update_option('revslider-temp-active', 'false');
		update_option('revslider-code', '');

	}

}
