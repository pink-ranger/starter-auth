<?php

/*
 * Our public content. 
 * Class to provide access to the Alpha page. 
 */
class Alpha extends Application {
    /* The default constructor for the Alpha class. */
	function __construct()
	{
		parent::__construct();
	}

	/* Stuff for everyone. */
	function index()
	{
		$this->data['pagebody'] = 'alpha';
		$this->render();
	}

}
