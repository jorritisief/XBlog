<?php

namespace Xesau\Blog;
use \Seclude\Source\MySQL;

class DataSource_Categories extends MySQL\DataSource_MySQL {
	public static $table = 'blog_categories';
	public static $idField = 'post_id';
}