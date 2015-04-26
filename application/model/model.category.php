<?php

namespace Xesau\Blog;
use \Model_DataEntryHolder;

class Model_Category extends Model_DataEntryHolder
{

	public function __construct ($id) {
		$this->id = $id;
		$this->dataEntry = DataSource_Categories::getEntry ($id);
	}

}