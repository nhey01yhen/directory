<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Login'), ['controller'=>'users','action' => 'Login']) ?></li>
        <li><?= $this->Html->link(__('Sign Up'), ['controller'=>'users','action' => 'signup']) ?></li>
        <li><?= $this->Html->link(__('Forgot Password'), ['controller'=>'users','action' => 'forgotPassword']) ?></li>
        <li><?= $this->Html->link(__('About Us'), ['controller'=>'users','action' => 'aboutus']) ?></li>
    </ul>
</nav>
