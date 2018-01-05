<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	//public $name = 'Posts';

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
		$this->set('posts', $this->Post->find('all',array('order'=>array('Post.id DESC'))));
	}

	public function admin_index()
    {
        $this->set('posts', $this->Post->find('all'));
    }

    public function admin_edit($id = null)
    {
    	if ($id > 0)
    	{
	        $this->Post->id = $id;

	        //if (!$this->Post->exists())
	        //{
	        //    //throw new NotFoundException(__('Invalid Post'));
	        //}

	        $post = $this->Post->findById( $id );
	        $this->set('Post',$post);
	    }

        if ($this->request->is('post') || $this->request->is('put'))
        {
        	if (AuthComponent::user('id'))
        	{
        		$this->request->data['Post']['user_id'] = AuthComponent::user('id');
        	}
        	else
        	{
        		$this->setFlash('Nie jesteś zalogowany');
        		$this->redirect('/users/login');
        	}

            //var_dump($this->request->data);die;

            if ($this->Post->save($this->request->data))
            {
                $this->Session->setFlash(__('The Post has been saved2'),'flash_success');
                //$this->redirect('/admin/posts/edit');
            }
            else
            {
                $this->Session->setFlash(__('The Post could not be saved. Please, try again.'),'flash_fail');
            }
        }
        else
        {
        	if ($id > 0)
    		{
            	$this->request->data = $this->Post->read(null, $id);
            }
        }
    }

    public function admin_delete($id = null)
    {
        if (!$this->request->is('post'))
        {
            throw new MethodNotAllowedException();
        }

        $this->Post->id = $id;

        if (!$this->Post->exists())
        {
            throw new NotFoundException(__('Unknown Post'));
        }

        if ($this->Post->delete())
        {
            $this->Session->setFlash(__('Post deleted'),'flash_success');
            $this->redirect(array('action' => 'index'));
        }

        $this->Session->setFlash(__('The Post could not be deleted.Please Try again.','flash_fail'));
        $this->redirect(array('action' => 'index'));
    }

}
