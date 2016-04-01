<?php
/* The controller to handle login and logout. */
class Auth extends Application 
{
    /* The default constructor for the Auth class. */
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

    /* The default controller method. */
	function index() 
	{
		$this->data['pagebody'] = 'login';
		$this->render();
	}

    /* The function to handle when the user selects the submit button. */
	function submit() 
	{
		$key = $_POST['userid'];
		$user = $this->users->get($key);
		if (password_verify($this->input->post('password'),$user->password)) 
		{
			$this->session->set_userdata('userID',$key);
			$this->session->set_userdata('userName',$user->name);
			$this->session->set_userdata('userRole',$user->role);
		}
		//echo $user->role;
		redirect('/');
	}

    /* The function to handle when the user selects the logout button. */
	function logout() 
	{
	  $this->session->sess_destroy();
	  redirect('/');
	}
}