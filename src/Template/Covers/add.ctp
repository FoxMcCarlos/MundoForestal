<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cover $cover
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Covers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="covers form large-9 medium-8 columns content">
    <?=  $this->Form->create($cover, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add Cover') ?></legend>
        <?php
            echo $this->Form->control('idAlbum', array('type'=>'select', 'options'=> $albums , 'label' => 'Album'));
            echo $this->Form->control('Cover', array('readonly' => 'true'  ));
            echo $this->Form->input('file', ['type' => 'file','class' =>'form-control', 'id' => 'files', 'name' => 'files']);
            echo $this->Html->image('null', array('alt' => 'Aquí se despliega la imagen', 'id' => 'image', 'style = "width:350px; height:250px;"'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<?php
 echo $this->Html->script('configCoverJS.js');
?>
