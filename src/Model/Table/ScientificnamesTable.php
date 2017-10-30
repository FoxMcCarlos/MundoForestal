<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Scientificnames Model
 *
 * @method \App\Model\Entity\Scientificname get($primaryKey, $options = [])
 * @method \App\Model\Entity\Scientificname newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Scientificname[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Scientificname|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scientificname patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Scientificname[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Scientificname findOrCreate($search, callable $callback = null, $options = [])
 */
class ScientificnamesTable extends Table
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

        $this->setTable('scientificnames');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');
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
            ->integer('Id')
            ->allowEmpty('Id', 'create');

        $validator
            ->scalar('Description')
            ->requirePresence('Description', 'create')
            ->notEmpty('Description');

        return $validator;
    }
}
