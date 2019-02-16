Skip to content
Why GitHub?
Enterprise
Explore
Marketplace
Pricing

Search

Sign in
Sign up
659 7,771 3,391 cakephp/cakephp
 Code  Issues 212  Pull requests 24  Projects 0  Wiki  Insights
Join GitHub today
GitHub is home to over 31 million developers working together to host and review code, manage projects, and build software together.

cakephp/src/Template/Error/pdo_error.ctp
a158d43  on 15 Nov 2017
@markstory markstory Fix failing deprecated method use in ExceptionRenderer tests.
@ADmad @ravage84 @markstory @lorenzo @dereuromark @bcrowe

45 lines (40 sloc)  1.41 KB
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Error\Debugger;
$this->setLayout('dev_error');
$this->assign('title', 'Database Error');
$this->assign('templateName', 'pdo_error.ctp');
$this->start('subheading');
?>
    <strong>Error: </strong>
    <?= h($message); ?>
<?php $this->end() ?>

<?php $this->start('file') ?>
<p class="notice">
    If you are using SQL keywords as table column names, you can enable identifier
    quoting for your database connection in config/app.php.
</p>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
    </p>
    <pre><?= h($error->queryString); ?></pre>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <pre><?= h(Debugger::dump($error->params)); ?></pre>
<?php endif; ?>
<?= $this->element('auto_table_warning'); ?>
<?php $this->end() ?>
