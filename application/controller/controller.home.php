<?php

namespace Xesau\Blog;
use \Seclude;

class Controller_Home extends Seclude\Controller {
	
	public function defaultAction ($page = 1) {
		if ($page < 1) $page = 1;
		
		$this->view = new Seclude\View ('home');
		$this->view->set ('posts', Model_Post::getPosts ($page));
	}
}