<?php

namespace Xesau\Blog;
use \Seclude;

class Controller_Error extends Seclude\Controller {
	public function defaultAction () {
		$this->view = new Seclude\View ('error');
	}
}