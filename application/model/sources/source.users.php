<?php

namespace Xesau\Blog;
use \Seclude\Source\MySQL;

class DataSource_Users extends MySQL\DataSource_MySQL {
	public static $table = 'blog_users';
	public static $idField = 'user_id';
}