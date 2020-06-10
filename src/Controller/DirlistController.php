<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
/**
 * Dirlist Controller
 *
 * @property \App\Model\Table\DirlistTable $Dirlist
 *
 * @method \App\Model\Entity\Dirlist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DirlistController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
     public function beforeFilter(Event $event){
       $this->Auth->allow(['controller'=>'dirlist','action' => 'index','client','search']);
     }

    public function index()
    {
        $this->paginate = [
          'limit'=>'10'
        ];
        //$this->set(compact('dirlist'));
        $dirlist = $this->paginate($this->Dirlist->find('all',
                   array('conditions'=>array('group_list'=>'HUB'))));
        $this->set('dirlist', $dirlist);
    }

    public function client()
    {
        $this->paginate = [
          'limit'=>'10'
        ];
        //$this->set(compact('dirlist'));
        $dirlist2 = $this->paginate($this->Dirlist->find('all',
                   array('conditions'=>array('group_list'=>'CLIENT'))));
        $this->set('dirlist', $dirlist2);
    }

    public function search(){
      $search = $this->request->getQuery('q');
      $this->paginate = [
        'limit'=>'10'
      ];


      $dirlist = $this->paginate($this->Dirlist->find()->where(['Or'=>['did_number like'=>'%'.$search.'%', 'username like'=>'%'.$search.'%']]));
      $this->set('dirlist', $dirlist);

    }

    /**
     * View method
     *
     * @param string|null $id Dirlist id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dirlist = $this->Dirlist->get($id, [
            'contain' => [],
        ]);

        $this->set('dirlist', $dirlist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dirlist = $this->Dirlist->newEntity();
        if ($this->request->is('post')) {
            $dirlist = $this->Dirlist->patchEntity($dirlist, $this->request->getData());
            if ($this->Dirlist->save($dirlist)) {
                //$this->Flash->success(__('The dirlist has been saved.'));
                $this->Flash->flash('New Directory List has been saved.',[
                  'params' => [
                  'type' => 'success'
                  ]
                ]);

                return $this->redirect(['action' => 'add']);

            }
            //$this->Flash->error(__('The dirlist could not be saved. Please, try again.'));
            $this->Flash->flash('New Directory List could not be saved. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }
        $this->set(compact('dirlist'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dirlist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dirlist = $this->Dirlist->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dirlist = $this->Dirlist->patchEntity($dirlist, $this->request->getData());
            if ($this->Dirlist->save($dirlist)) {
                $this->Flash->success(__('The dirlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dirlist could not be saved. Please, try again.'));
        }
        $this->set(compact('dirlist'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dirlist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dirlist = $this->Dirlist->get($id);
        if ($this->Dirlist->delete($dirlist)) {
            $this->Flash->success(__('The dirlist has been deleted.'));
        } else {
            $this->Flash->error(__('The dirlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
