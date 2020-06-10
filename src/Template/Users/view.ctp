<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

    <h3>User Profile</h3>
      <div class="col-md-12" align="center">
          <div class="row">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo ucwords(h($user->username)); ?></h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-4 col-lg-4 " align="center"> <img alt="User Pic" src="https://images.cloudstaff.com/getimage/<?= h($user->username) ?>" class="img-circle img-responsive"> </div>

                    <div class=" col-md-8 col-lg-8 ">
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Email:</td>
                            <td><?= h($user->email) ?></td>
                          </tr>
                          <tr>
                            <td>Created at:</td>
                            <td><?php echo $this->Time->timeagoinwords($user->created); ?></td>
                          </tr>
                          <tr>
                            <td>Modified at:</td>
                            <td><?= h($user->modified) ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
