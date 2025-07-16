<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hospital Model
 *
 * @method \App\Model\Entity\Hospital newEmptyEntity()
 * @method \App\Model\Entity\Hospital newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Hospital> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hospital get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Hospital findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Hospital patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Hospital> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hospital|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Hospital saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Hospital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Hospital>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Hospital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Hospital> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Hospital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Hospital>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Hospital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Hospital> deleteManyOrFail(iterable $entities, array $options = [])
 */
class HospitalTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('hospital');
        $this->setDisplayField('hospital_id');
        $this->setPrimaryKey('hospital_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('hospital_name')
            ->requirePresence('hospital_name', 'create')
            ->notEmptyString('hospital_name');

        $validator
            ->integer('hospital_address')
            ->requirePresence('hospital_address', 'create')
            ->notEmptyString('hospital_address');

        $validator
            ->integer('hospital_contact')
            ->requirePresence('hospital_contact', 'create')
            ->notEmptyString('hospital_contact');

        return $validator;
    }
}
