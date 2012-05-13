<?php

/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->tasks = $this->context->createTasks()->where(array('done' => false))->order('created ASC');
	}

}
