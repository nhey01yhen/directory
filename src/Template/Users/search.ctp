

  <?php
  /**
   * @var \App\View\AppView $this
   * @var \App\Model\Entity\Dirlist[]|\Cake\Collection\CollectionInterface $dirlist
   */
  ?>
  <?php echo $this->Flash->render();?>
  <div class="container">
    <h2>Users</h2>
      <form action="<?php echo $this->Url->build(['action'=>'search']) ?>" method="get">
        <div class="col-md-4">Total : </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 float-right">

            <div class="input-group">
              <input type="search" name="q" class="form-control">
              <div class="input-group-prepend">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
        </div>
      </form>
      <br /><br />
    <table class="table table-hover" style="font-size:14px;">
      <thead>
        <tr>
          <th scope="col"><?= $this->Paginator->sort('User.id','Id') ?></th>
          <th scope="col"><?= $this->Paginator->sort('User.email','Email') ?></th>
          <th scope="col"><?= $this->Paginator->sort('User.username','Username') ?></th>
          <th scope="col"><?= $this->Paginator->sort('User.created','Created Date') ?></th>
          <th><?= __('ACTIONS') ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
          <td><?= $this->Number->format($user->id) ?></td>
          <td><?= $this->Html->link(__(h($user->email)), ['action' => 'view', $user->id]) ?></td>
          <td><?= h($user->username) ?></td>
          <td><?php echo $this->Time->timeagoinwords($user->created,['accuracy'=>['week'=>'week']]) ?></td>
          <td class="actions">
              <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class'=>'btn btn-success']) ?>
              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class'=>'btn btn-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>


    <?php
    $paginator = $this->Paginator->setTemplates([
      'number'=>'<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
      'current'=>'<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',
      'first'=>'<li class="page-item"><a href="{{url}}" class="page-link">&laquo;</a></li>',
      'last'=>'<li class="page-item"><a href="{{url}}" class="page-link">&raquo;</a></li>',
      'prevActive'=>'<li class="page-item"><a href="{{url}}" class="page-link">&lt;</a></li>',
      'nextActive'=>'<li class="page-item"><a href="{{url}}" class="page-link">&gt;</a></li>'
    ]);
     ?>
    <nav>
      <ul class="pagination">
        <?php
        echo $paginator->first();
        if($paginator->hasPrev()){
          echo $paginator->prev();
        }
        echo $paginator->numbers();
        if($paginator->hasNext()){
          echo $paginator->next();
        }
        echo $paginator->last();
         ?>
      </ul>
    </nav>
  </div>
