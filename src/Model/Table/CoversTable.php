<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Covers Model
 *
 * @method \App\Model\Entity\Cover get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cover newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cover[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cover|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cover patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cover[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cover findOrCreate($search, callable $callback = null, $options = [])
 */
class CoversTable extends Table
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

        $this->setTable('covers');
        $this->setDisplayField('idCover');
        $this->setPrimaryKey('idCover');
        $this->belongsTo('Albums')
             ->setForeignKey('IdAlbum')
             ->setJoinType('INNER');
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
            ->integer('idCover')
            ->allowEmpty('idCover', 'create');

        $validator
            ->integer('idAlbum')
            ->requirePresence('idAlbum', 'create')
            ->notEmpty('idAlbum');

        $validator
            ->scalar('Cover')
            ->maxLength('Cover', 200)
            ->requirePresence('Cover', 'create')
            ->notEmpty('Cover');

        return $validator;
    }
}
