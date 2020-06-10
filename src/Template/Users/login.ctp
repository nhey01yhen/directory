<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>



  <div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>
                <?= $this->Form->create() ?>
                  <div class="form-group">
                    <?php echo $this->Form->control('username',['class'=>'form-control form-control-user','placeholder'=>'Enter your Username']); ?>
                  </div>
                  <div class="form-group">
                    <?php echo $this->Form->control('password',['class'=>'form-control form-control-user','placeholder'=>'Enter your Password']); ?>
                  </div>
                  <hr />
                  <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary btn-user btn-block']) ?>
                  </a>

                <?= $this->Form->end() ?>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
