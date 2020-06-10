<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * RingGroup Controller
 *
 * @property \App\Model\Table\RingGroupTable $RingGroup
 *
 * @method \App\Model\Entity\RingGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RingGroupController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
     public function beforeFilter(Event $event){
       $this->Auth->allow(['controller'=>'ringgroup','action' => 'index','client','search']);
     }

    public function index()
    {
        $this->paginate = [
          'limit'=>'10'
        ];
        //$this->set(compact('dirlist'));
        $ringGroup = $this->paginate($this->RingGroup->find('all'));
        $this->set('ringGroup', $ringGroup);
    }

    public function search(){
      $search = $this->request->getQuery('q');
      $this->paginate = [
        'limit'=>'10'
      ];


      $ringGroup = $this->paginate($this->RingGroup->find()->where(['Or'=>['id_group like'=>'%'.$search.'%', 'description like'=>'%'.$search.'%']]));
      $this->set('ringGroup', $ringGroup);

    }

    /**
     * View method
     *
     * @param string|null $id Ring Group id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ringGroup = $this->RingGroup->get($id, [
            'contain' => [],
        ]);

        $this->set('ringGroup', $ringGroup);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ringGroup = $this->RingGroup->newEntity();
        if ($this->request->is('post')) {
            $ringGroup = $this->RingGroup->patchEntity($ringGroup, $this->request->getData());
            if ($this->RingGroup->save($ringGroup)) {
                //$this->Flash->success(__('The ring group has been saved.'));
                $this->Flash->flash('New Ring Group/Queue has been saved.',[
                  'params' => [
                  'type' => 'success'
                  ]
                ]);

                return $this->redirect(['action' => 'index']);
            }
            //$this->Flash->error(__('The ring group could not be saved. Please, try again.'));
            $this->Flash->flash('Ring Group / Queue could not be saved. Please, try again',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }
        $this->set(compact('ringGroup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ring Group id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ringGroup = $this->RingGroup->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ringGroup = $this->RingGroup->patchEntity($ringGroup, $this->request->getData());
            if ($this->RingGroup->save($ringGroup)) {
                //$this->Flash->success(__('The ring group has been saved.'));
                $this->Flash->flash('New Ring Group/Queue has been saved.',[
                  'params' => [
                  'type' => 'success'
                  ]
                ]);

                return $this->redirect(['action' => 'index']);
            }
            //$this->Flash->error(__('The ring group could not be saved. Please, try again.'));
            $this->Flash->flash('Ring Group/Queue could not be saved. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }
        $this->set(compact('ringGroup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ring Group id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ringGroup = $this->RingGroup->get($id);
        if ($this->RingGroup->delete($ringGroup)) {
            //$this->Flash->success(__('The ring group has been deleted.'));
            $this->Flash->flash('Ring Group/Queue has been deleted.',[
              'params' => [
              'type' => 'success'
              ]
            ]);
        } else {
            //$this->Flash->error(__('The ring group could not be deleted. Please, try again.'));
            $this->Flash->flash('Ring Group/Queue could not be deleted. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }

        return $this->redirect(['action' => 'index']);
    }
}
