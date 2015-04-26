<?php

namespace Xesau\Blog;
use \Seclude\Source\MySQL;

class DataSource_Posts extends MySQL\DataSource_MySQL {
	public static $table = 'blog_posts';
	public static $idField = 'post_id';
}