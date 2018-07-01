<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $album->IdAlbum],
                ['confirm' => __('Are you sure you want to delete # {0}?', $album->IdAlbum)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Albums'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="albums form large-9 medium-8 columns content">
    <?= $this->Form->create($album) ?>
    <fieldset>
        <legend><?= __('Edit Album') ?></legend>
        <?php
            echo $this->Form->control('Name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
