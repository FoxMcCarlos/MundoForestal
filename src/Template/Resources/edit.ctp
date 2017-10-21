<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $resource->IdResource],
                ['confirm' => __('Are you sure you want to delete # {0}?', $resource->IdResource)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Resources'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="resources form large-9 medium-8 columns content">
    <?= $this->Form->create($resource) ?>
    <fieldset>
        <legend><?= __('Edit Resource') ?></legend>
        <?php
            echo $this->Form->control('IdContent');
            echo $this->Form->control('Resource');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
