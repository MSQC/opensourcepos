<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Security extends CI_Security
{
  public function csrf_verify()
  {
    if (ENVIRONMENT === 'testing')
    {
      return true;
    }
    return parent::csrf_verify();
  }
}
