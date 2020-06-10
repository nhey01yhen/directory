<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
     //public function beforeFilter(Event $event){
    //   $this->Auth->allow(['controller'=>'users','action' => 'signup']);
    // }
     public function check(){
       $data=$this->Users->query('SELECT * FROM users ORDER by id desc');
       $this->set('data',$data);
    }

    public function index()
    {
        $this->paginate = [
          'limit'=>'5'
        ];
        //$this->set(compact('dirlist'));
        $users = $this->paginate($this->Users->find('all'));
        $number = $users->count();
        $this->set('users', $users);
    }
    public function search(){
      $search = $this->request->getQuery('q');
      $this->paginate = [
        'limit'=>'10'
      ];


      $users = $this->paginate($this->Users->find()->where(['Or'=>['email like'=>'%'.$search.'%',
                                                                              'username like'=>'%'.$search.'%']]));
      $this->set('users', $users);

    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $checkRegistrationTime = new Time($user->created);



        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
      $user = $this->Users->newEntity();
      if ($this->request->is('post')) {
        $this->request->data['role_id'] = 1;

        $user = $this->Users->patchEntity($user, $this->request->getData());
        if($this->Users->save($user)) {
          //$this->Flash->success(__('The user has been saved.'));
          $this->Flash->flash('The user has been saved.',[
            'params' => [
            'type' => 'success'
            ]
          ]);
          return $this->redirect(['action' => 'index']);
        }
        //$this->Flash->error(__('The user could not be saved. Please try again,'));
        $this->Flash->flash('The user could not be saved. Please try again.',[
          'params' => [
          'type' => 'warning'
          ]
        ]);
      }
      $this->set(compact('user'));
      $this->set('_serialize', ['user']);
    }

    public function login()
    {
      if($this->Auth->user('id')){
        $this->Flash->warning(__('You are already logged!'));
        return $this->redirect(['controller'=>'Users', 'action'=>'index']);
      }
        if($this->request->is('post')){
          $user = $this->Auth->identify();
          if($user){
            $this->Auth->setUser($user);
            //$this->Flash->success(__('Login Successful!'));
            $this->Flash->flash('Login Successful!',[
              'params' => [
              'type' => 'success'
              ]
            ]);
            return $this->redirect(['controller'=>'Users', 'action'=>'index']);
          }
//$this->Flash->error(__('Sorry, the login was not successful'));
          $this->Flash->flash('Sorry, the login was not successful, Please try to login again.',[
            'params' => [
            'type' => 'warning'
            ]
          ]);
      }
    }

    public function logout(){
      //$this->Flash->success('Your are now logged out!');
      $this->Flash->flash('Your are now logged out!',[
        'params' => [
        'type' => 'success'
        ]
      ]);
      return $this->redirect($this->Auth->logout());
    }
    public function signup()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['role_id'] = '2';
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                //$this->Flash->success(__('The user has been saved.'));
                $this->Flash->flash('The user has been saved.',[
                  'params' => [
                  'type' => 'success'
                  ]
                ]);
                return $this->redirect(['action' => 'index']);
            }
            //$this->Flash->error(__('The user could not be saved. Please, try again.'));
            $this->Flash->flash('The user could not be saved. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }
        $this->set(compact('user'));
    }

    public function forgotPassword(){

    }
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                //$this->Flash->success(__('The user has been saved.'));
                $this->Flash->flash('The user has been saved.',[
                  'params' => [
                  'type' => 'success'
                  ]
                ]);
                return $this->redirect(['action' => 'index']);
            }
            //$this->Flash->error(__('The user could not be saved. Please, try again.'));
            $this->Flash->flash('The user could not be saved. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            //$this->Flash->success(__('The user has been deleted.'));
            $this->Flash->flash('The user has been deleted.',[
              'params' => [
              'type' => 'success'
              ]
            ]);
        } else {
            //$this->Flash->error(__('The user could not be deleted. Please, try again.'));
            $this->Flash->flash('The user could not be deleted. Please, try again.',[
              'params' => [
              'type' => 'success'
              ]
            ]);
        }

        return $this->redirect(['action' => 'index']);
    }
}
