<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dirlist[]|\Cake\Collection\CollectionInterface $dirlist
 */
?>
<?php echo $this->Flash->render();?>
<div class="container">
  <h2>Dial Pattern and Featured Code Guide</h2>
    <form action="<?php echo $this->Url->build(['action'=>'search']) ?>" method="get">
      <div class="col-md-4" style="font-size:1.5em;"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4 float-right">

          <div class="input-group">
            <input type="search" name="q" class="form-control">
            <div class="input-group-prepend">
              <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
              </button>&nbsp;&nbsp;

              <?= $this->Html->link(
                  '<span class="fa fa-plus-circle" style="color:#fff;"></span><span class="sr-only">' . __('Add') . '</span>',
                  ['controller'=>'Featuredcode','action' => 'add'],
                  ['escape' => false,'class'=>'btn btn-success', 'title' => __('Add new Dial Pattern')]
              ) ?>
            </div>
          </div>
      </div>
    </form>
    <br /><br />

    <div class="row">
    <div class="col-sm-8">
      <table class="table table-hover table-bordered" style="font-size:14px;">
        <thead>
          <tr>
            <th scope="col"><?= $this->Paginator->sort('Featuredcode.id','Id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Featuredcode.featured_code','Featured Code') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Featuredcode.action','Action') ?></th>
            <?php if($auth){ ?>
              <th><?= __('ACTIONS') ?></th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($featuredcode as $featuredcode): ?>
          <tr>
            <td><?= $this->Number->format($featuredcode->id) ?></td>
            <td><?= h($featuredcode->featured_code)?></td>
            <td><?= h($featuredcode->action)?></td>
            <?php if($auth){ ?>
              <td class="actions text-center">
                    <?= $this->Html->link(
                        '<span class="fas fa-edit"></span><span class="sr-only">' . __('Edit') . '</span>',
                        ['action' => 'edit', $featuredcode->id],
                        ['escape' => false, 'title' => __('Edit')]
                    ) ?>
                    &nbsp;|&nbsp;
                    <?= $this->Form->postLink(
                        '<span class="fas fa-trash-alt" style="color:red;"></span><span class="sr-only">' . __('Delete') . '</span>',
                        ['action' => 'Delete', $featuredcode->id],
                        ['escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $featuredcode->id)]
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

    <div class="col-sm-4">
      <br /><br />
      <span style="color:#FF0000;font-style:italic;">For Dialing tips, Kindly refer to the options provided below:</span>
      <hr />
      <div class="row">
        <span style="font-weight:600;">Option 1: DIAL PATTERN LINKS</span>
      </div>
      <div class="row">
        <?= $this->Html->link(__('Dial Pattern Link'), ['controller'=>'Dialpattern','action' => 'index'],['class'=>'collapse-item']) ?>
      </div>
      <hr />
      <div class="row">
        <span style="font-weight:600;">Option 2: Ask Botley on Rocket Chat</span>
      </div>
      <div class="row">
        <span style="font-weight:100;">Just simply type the following commands:</span>
      </div>
      <div class="row">
        <span style="font-weight:400;">@botley dialpatterns</span>
      </div>
      <div class="row">
        <span style="font-weight:400;">@botley dialpatterns # (# refers to number aligned to the country you are trying to call e.g. @botley dialpattern 3)</span>
      </div>
    </div>
    </div>
</div>
