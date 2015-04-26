<?php

namespace Xesau\Blog;
use \Model_DataEntryHolder;

class Model_User extends Model_DataEntryHolder
{

	public function __construct ($id) {
		$this->id = $id;
		$this->dataEntry = DataSource_Users::getEntry ($id);
	}
	
	public static function byUsername ($username) {
		return ($temp = DataSource_Users::select (array ('user_id'))->where ('username', $username)->assoc ()) ? new Model_User ($temp ['user_id']) : false;
	}
	
	public function login ($password) {
		return $this->dataEntry->get ('password') == Seclude\Hashing::blowfish ($password, $this->dataEntry->get ('password'));
	}

}