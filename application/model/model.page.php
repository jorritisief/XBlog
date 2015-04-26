<?php

namespace Xesau\Blog;
use \Model_DataEntryHolder;

class Model_Page extends Model_DataEntryHolder
{

	public function __construct ($id) {
		$this->id = $id;
		$this->dataEntry = DataSource_Pages::getEntry ($id);
	}
	
	public static function byURL ($url) {
		return ($temp = DataSource_Pages::select (array ('page_id'))->where ('url', $url)->assoc ()) ? new Model_Page ($temp ['page_id']) : false;
	}

}