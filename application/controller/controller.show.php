<?php

namespace Xesau\Blog;
use \Seclude;

class Controller_Show extends Seclude\Controller {
	public function defaultAction () {}
	
	public function postAction ($postID = '') {
		$post = new Model_Post ($postID);
		
		if ($post->isDisposed ())
			$this->view = new Seclude\View ('error');
		else
		{
			$this->view = new Seclude\View('show_post', $post->getDataEntry ()->get ('title'));
			$this->view->set ('post', $post->toArray ());
		}
	}
	
	public function userAction ($userID = '') {
		$user = new Model_User ($userID);
		
		if ($user->isDisposed ())
		{
			$user = Model_User::byUsername ($userID);
			
			if ($user->isDisposed ())
			{
				$this->view = new Seclude\View ('error');
				return;
			}
		}

		$this->view = new Seclude\View('show_user', $user->getDataEntry ()->get ('display_name'));
		$this->view->set ('user', $user->getDataEntry ()->getData ());
	}
	
	public function pageAction ($pageID = '') {
		$page = new Model_Page ($pageID);
		
		if ($page->isDisposed ())
		{
			$page = Model_Page::byURL ($pageID);
			
			if ($page->isDisposed ())
			{
				$this->view = new Seclude\View ('error');
				return;
			}
		}

		$this->view = new Seclude\View('show_page', $page->getDataEntry ()->get ('name'));
		$this->view->set ('page', $page->getDataEntry ()->getData ());
	}
	
	
}