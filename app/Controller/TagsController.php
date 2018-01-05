<?php
App::uses('AppController', 'Controller');

class TagsController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	//public $name = 'Tags';

/**
 * Default helper
 *
 * @var array
 */
	public $helpers = array('Html', 'Session');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('index');
	}

	public function index()
	{
		$this->set('Tags', $this->Tag->find('all'));
	}

	public function admin_index()
    {
        $this->set('Tags', $this->Tag->find('all'));
    }

    public function admin_edit($id = null)
    {
    	if ($id > 0)
    	{
	        $this->Tag->id = $id;

	        //if (!$this->Tag->exists())
	        //{
	        //    //throw new NotFoundException(__('Invalid Tag'));
	        //}

	        $Tag = $this->Tag->findById( $id );
	        $this->set('Tag',$Tag);
	    }

        if ($this->request->is('Tag') || $this->request->is('put'))
        {
        	if (AuthComponent::user('id'))
        	{
        		$this->request->data['Tag']['user_id'] = AuthComponent::user('id');
        		if(! $this->request->data['Tag']['id'] > 0)
        		{
        			unset($this->request->data['Tag']['id']);
        			//$this->Tag->create();
        		}
        	}
        	else
        	{
        		$this->setFlash('Nie jesteś zalogowany');
        		$this->redirect('/users/login');
        	}

            if ($this->Tag->save($this->request->data))
            {
                $this->Session->setFlash(__('The Tag has been saved'),'flash_success');
                $this->redirect('/admin/Tags/edit');
            }
            else
            {
                $this->Session->setFlash(__('The Tag could not be saved. Please, try again.'),'flash_fail');
            }
        }
        else
        {
        	if ($id > 0)
    		{
            	$this->request->data = $this->Tag->read(null, $id);
            }
        }
    }

    public function admin_delete($id = null)
    {
        if (!$this->request->is('Tag'))
        {
            throw new MethodNotAllowedException();
        }

        $this->Tag->id = $id;

        if (!$this->Tag->exists())
        {
            throw new NotFoundException(__('Unknown Tag'));
        }

        if ($this->Tag->delete())
        {
            $this->Session->setFlash(__('Tag deleted'),'flash_success');
            $this->redirect(array('action' => 'index'));
        }

        $this->Session->setFlash(__('The Tag could not be deleted.Please Try again.','flash_fail'));
        $this->redirect(array('action' => 'index'));
    }

}
