<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dirlist[]|\Cake\Collection\CollectionInterface $dirlist
 */
?>
<?php echo $this->Flash->render();?>
<div class="container">
  <h2>Hub Directory List</h2>
    <form action="<?php echo $this->Url->build(['action'=>'search']) ?>" method="get">
      <div class="col-md-4 alert alert-primary" style="font-size:1.5em;">TOTAL COUNT : <?= $this->Paginator->counter(['format' => __('{{count}}')]) ?></div>
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
        <th scope="col"><?= $this->Paginator->sort('Dirlist.id','Id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('Dirlist.did_number','DID Number') ?></th>
        <th scope="col"><?= $this->Paginator->sort('Dirlist.ext_number','Extension Number') ?></th>
        <th scope="col"><?= $this->Paginator->sort('Dirlist.dept','Department/Account') ?></th>
        <th scope="col"><?= $this->Paginator->sort('Dirlist.username','Username') ?></th>
        <th scope="col"><?= $this->Paginator->sort('Dirlist.username','Group') ?></th>
        <?php if($auth){ ?>
          <th><?= __('ACTIONS') ?></th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dirlist as $dirlist): ?>
      <tr>
        <td><?= $this->Number->format($dirlist->id) ?></td>
        <td><?= h($dirlist->did_number)?></td>
        <td><?= h($dirlist->ext_number)?></td>
        <td><?= h($dirlist->dept)?></td>
        <td><?= h($dirlist->username)?></td>
        <td><?= h($dirlist->group_list)?></td>
        <?php if($auth){ ?>
          <td class="actions text-center">
                <?= $this->Html->link(
                    '<span class="fas fa-edit"></span><span class="sr-only">' . __('Edit') . '</span>',
                    ['action' => 'edit', $dirlist->id],
                    ['escape' => false, 'title' => __('Edit')]
                ) ?>
                &nbsp;|&nbsp;
                <?= $this->Form->postLink(
                    '<span class="fas fa-trash-alt" style="color:red;"></span><span class="sr-only">' . __('Delete') . '</span>',
                    ['action' => 'Delete', $dirlist->id],
                    ['escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $dirlist->id)]
                ) ?>

          </td>
        <?php } ?>
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
