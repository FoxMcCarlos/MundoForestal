<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Botanicalfamilies'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="botanicalfamilies form large-9 medium-8 columns content">
    <?= $this->Form->create($botanicalfamily) ?>
    <fieldset>
        <legend><?= __('Add Botanicalfamily') ?></legend>
        <?php
            echo $this->Form->control('Description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
