<?php

/*
 * Secret stuff
 * Class to provide blocking for the Gamma page.
 */
class Gamma extends Application {
    /* The default constructor for the Gamma class. */
	function __construct()
	{
		parent::__construct();
		$this->restrict(ROLE_ADMIN);
	}

	/* We could tell you what was here, but... */
	function index()
	{
		$this->data['pagebody'] = 'gamma';
		$this->render();
	}
}
