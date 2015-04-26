<?php

namespace Xesau\Blog;
use \Model_DataEntryHolder;

class Model_Post extends Model_DataEntryHolder
{

	public function __construct ($id) {
		$this->id = $id;
		$this->dataEntry = DataSource_Posts::getEntry ($id);
	}
	
	public static function getPosts ($page = 1) {
		if ($page < 1) $page = 1;
		return DataSource_Posts::select ()->with ('author', 'author_id', array ('*'), 'blog_users', 'user_id')->limit (10, ($page * 10) - 10)->assocAll ();
	}
	
	public function toArray () {
		$data = $this->dataEntry->getData ();
		$data ['author'] = DataSource_Users::getEntry ($data ['author_id'])->getData ();
		return $data;
	}
	
}