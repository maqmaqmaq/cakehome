<?php
App::uses('AppController', 'Controller');

class CommentsController extends AppController {

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
		$this->Auth->allow('add');
	}

	public function index()
	{
		$this->set('comments', $this->Post->find('all'));
	}

	public function admin_index()
    {
        $this->set('comments', $this->Post->find('all'));
    }

    public function add()
    {
        $this->autoLayout = false;
        if ($this->request->is('post') || $this->request->is('put'))
        {
            $this->loadModel('Signup');
            $this->Signup->setCaptcha('captcha', $this->Captcha->getCode('Signup.captcha'));
            $this->Signup->set($this->request->data);
            if($this->Signup->validates())
            {
                $this->request->data['Comment']['ip'] = $this->request->clientIp();
                if ($this->Comment->save($this->request->data))
                {
                    $this->Session->setFlash(__('Komentarz został dodany.'),'flash_success');
                    $this->redirect('/');
                }
                else
                {
                    $this->Session->setFlash(__('Komentarz nie został dodany.'),'flash_fail');
                    $this->redirect('/');
                }
            }
            else
            {
                $this->Session->setFlash('Data Validation Failure', 'flash_fail');
            }
        }
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
        		if(! $this->request->data['Post']['id'] > 0)
        		{
        			unset($this->request->data['Post']['id']);
        			//$this->Post->create();
        		}
        	}
        	else
        	{
        		$this->setFlash('Nie jesteś zalogowany');
        		$this->redirect('/users/login');
        	}

            if ($this->Post->save($this->request->data))
            {
                $this->Session->setFlash(__('The Post has been saved'),'flash_success');
                $this->redirect('/admin/posts/edit');
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
