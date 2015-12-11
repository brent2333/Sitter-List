<?php

class ListsController extends BaseController {

	public function __construct() {
		$this->filter('before', 'auth');
	}

	
}