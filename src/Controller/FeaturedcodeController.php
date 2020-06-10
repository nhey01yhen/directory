<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
/**
 * Featuredcode Controller
 *
 * @property \App\Model\Table\FeaturedcodeTable $Featuredcode
 *
 * @method \App\Model\Entity\Featuredcode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FeaturedcodeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
     public function beforeFilter(Event $event){
       $this->Auth->allow(['controller'=>'featuredcde','action' => 'index']);
     }

    public function index()
    {

        $this->paginate = [
          'limit'=>'10'
        ];
        //$this->set(compact('dirlist'));
        $featuredcode = $this->paginate($this->Featuredcode->find('all'));
        $this->set('featuredcode', $featuredcode);
    }

    public function search(){
      $search = $this->request->getQuery('q');
      $this->paginate = [
        'limit'=>'10'
      ];


      $featuredcode = $this->paginate($this->Featuredcode->find()->where(['Or'=>['featured_code like'=>'%'.$search.'%', 'action like'=>'%'.$search.'%']]));
      $this->set('featuredcode', $featuredcode);

    }

    /**
     * View method
     *
     * @param string|null $id Featuredcode id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $featuredcode = $this->Featuredcode->get($id, [
            'contain' => [],
        ]);

        $this->set('featuredcode', $featuredcode);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $featuredcode = $this->Featuredcode->newEntity();
        if ($this->request->is('post')) {
            $featuredcode = $this->Featuredcode->patchEntity($featuredcode, $this->request->getData());
            if ($this->Featuredcode->save($featuredcode)) {
                //$this->Flash->success(__('The featuredcode has been saved.'));
                $this->Flash->flash('New Featured Code has been saved.',[
                  'params' => [
                  'type' => 'success'
                  ]
                ]);

                return $this->redirect(['action' => 'index']);
            }
            //$this->Flash->error(__('The featuredcode could not be saved. Please, try again.'));
            $this->Flash->flash('Featured Code could not be saved. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }
        $this->set(compact('featuredcode'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Featuredcode id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $featuredcode = $this->Featuredcode->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $featuredcode = $this->Featuredcode->patchEntity($featuredcode, $this->request->getData());
            if ($this->Featuredcode->save($featuredcode)) {
                //$this->Flash->success(__('The featuredcode has been saved.'));
                $this->Flash->flash('New Featured Code has been saved.',[
                  'params' => [
                  'type' => 'success'
                  ]
                ]);

                return $this->redirect(['action' => 'index']);
            }
            //$this->Flash->error(__('The featuredcode could not be saved. Please, try again.'));
            $this->Flash->flash('Featured Code could not be saved. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }
        $this->set(compact('featuredcode'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Featuredcode id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $featuredcode = $this->Featuredcode->get($id);
        if ($this->Featuredcode->delete($featuredcode)) {
            //$this->Flash->success(__('The featuredcode has been deleted.'));
            $this->Flash->flash('Featured Code has been deleted.',[
              'params' => [
              'type' => 'success'
              ]
            ]);
        } else {
            //$this->Flash->error(__('The featuredcode could not be deleted. Please, try again.'));
            $this->Flash->flash('Featured Code could not be deleted. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }

        return $this->redirect(['action' => 'index']);
    }
}
