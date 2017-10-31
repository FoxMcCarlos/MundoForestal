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
                ['action' => 'delete', $content->IdContent],
                ['confirm' => __('Are you sure you want to delete # {0}?', $content->IdContent)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contents form large-9 medium-8 columns content">
    <?= $this->Form->create($content) ?>
    <fieldset>
        <legend><?= __('Edit Content') ?></legend>
        <?php
            echo $this->Form->input('IdCategory', array('type'=>'select', 'options'=> $categories, 'label' => 'Category'));
            echo $this->Form->input('IdBotanicalFamily', array('type'=>'select','options'=> $families,'label' => 'Botanical Family'));
            echo $this->Form->control('Name');
            echo $this->Form->control('ScientificName', array('label' => 'Scientific Name'));
            echo $this->Form->control('Description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
