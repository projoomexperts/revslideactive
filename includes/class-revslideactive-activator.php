<?php

class Revslideactive_Activator {

	public static function activate() {
		
		
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 37; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		
		update_option('revslider-valid', 'true');
		update_option('revslider-code', $randomString);
		//update_option('revslider-email', $data['email']);
		update_option('revslider-temp-active-notice', 'false');
		
	}

}
