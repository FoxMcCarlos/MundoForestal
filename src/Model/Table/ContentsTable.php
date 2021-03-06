<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contents Model
 *
 * @method \App\Model\Entity\Content get($primaryKey, $options = [])
 * @method \App\Model\Entity\Content newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Content[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Content|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Content patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Content[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Content findOrCreate($search, callable $callback = null, $options = [])
 */
class ContentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('contents');
        $this->setDisplayField('Name');
        $this->setPrimaryKey('IdContent');
        $this->belongsTo('Categories')->setForeignKey('IdCategory');
        $this->belongsTo('Botanicalfamilies')->setForeignKey('IdBotanicalFamily');
        $this->HasMany('Resources')->setForeignKey(['IdContent']);


    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('IdContent')
            ->allowEmpty('IdContent', 'create');

        $validator
            ->integer('IdCategory')
            ->requirePresence('IdCategory', 'create')
            ->notEmpty('IdCategory');

        $validator
            ->integer('IdBotanicalFamily')
            ->allowEmpty('IdBotanicalFamily');

        $validator
            ->scalar('Name')
            ->requirePresence('Name', 'create')
            ->notEmpty('Name');

        $validator
            ->scalar('ScientificName')
            ->allowEmpty('ScientificName');

        $validator
            ->scalar('Description')
            ->requirePresence('Description', 'create')
            ->notEmpty('Description');

        return $validator;
    }
}
