<?php
/* The model for the Users Table. */
class Users extends MY_Model
{
  /* The default constructor for the Users class. */
  public function __construct()
  {
    parent::__construct('users', 'id');
  }
}