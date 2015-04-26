<?php

namespace Xesau\Blog;
use \Seclude\Source\MySQL;

class DataSource_Pages extends MySQL\DataSource_MySQL {
	public static $table = 'blog_pages';
	public static $idField = 'page_id';
}