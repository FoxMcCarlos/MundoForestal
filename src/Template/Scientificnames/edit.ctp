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
                ['action' => 'delete', $scientificname->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $scientificname->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Scientificnames'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="scientificnames form large-9 medium-8 columns content">
    <?= $this->Form->create($scientificname) ?>
    <fieldset>
        <legend><?= __('Edit Scientificname') ?></legend>
        <?php
            echo $this->Form->control('Description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
