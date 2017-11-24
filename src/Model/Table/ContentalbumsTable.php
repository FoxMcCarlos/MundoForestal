<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contentalbums Model
 *
 * @method \App\Model\Entity\Contentalbum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contentalbum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contentalbum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contentalbum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contentalbum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contentalbum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contentalbum findOrCreate($search, callable $callback = null, $options = [])
 */
class ContentalbumsTable extends Table
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

        $this->setTable('contentalbums');
        $this->setDisplayField('IdAlbumContent');
        $this->setPrimaryKey('IdAlbumContent');
        $this->belongsTo('Contents')
              ->setForeignKey('IdContent')
              ->setJoinType('INNER');
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
            ->integer('IdAlbumContent')
            ->allowEmpty('IdAlbumContent', 'create');

        $validator
            ->integer('IdAlbum')
            ->requirePresence('IdAlbum', 'create')
            ->notEmpty('IdAlbum');

        $validator
            ->integer('IdContent')
            ->requirePresence('IdContent', 'create')
            ->notEmpty('IdContent');

        return $validator;
    }
}
