<?php

/*
 * Our registered users' content. 
 * Class to provide blocking for the Beta page. 
 */
class Beta extends Application {
    /* The default constructor for the Beta class. */
	function __construct()
	{
		parent::__construct();
		$this->restrict(array(ROLE_USER,ROLE_ADMIN));
	}

	/* Stuff that should only be seen by logged in users. */
	function index()
	{
		$this->data['pagebody'] = 'beta';
		$this->render();
	}

}
