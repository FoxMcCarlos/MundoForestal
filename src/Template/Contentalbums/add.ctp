<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contentalbum $contentalbum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contentalbums'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contentalbums form large-9 medium-8 columns content">
    <?= $this->Form->create($contentalbum) ?>
    <fieldset>
        <legend><?= __('Add Contentalbum') ?></legend>
        <?php
          echo $this->Form->input('IdAlbum', array('type'=>'select', 'options'=> $albums , 'label' => 'Album'));
          echo $this->Form->input('IdContent', array('type'=>'select','options'=> $contents,'label' => 'Content'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
