<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DonorHospital Model
 *
 * @method \App\Model\Entity\DonorHospital newEmptyEntity()
 * @method \App\Model\Entity\DonorHospital newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DonorHospital> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DonorHospital get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DonorHospital findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DonorHospital patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DonorHospital> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DonorHospital|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DonorHospital saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DonorHospital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DonorHospital>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DonorHospital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DonorHospital> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DonorHospital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DonorHospital>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DonorHospital>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DonorHospital> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DonorHospitalTable extends Table
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

        $this->setTable('donor_hospital');
        $this->setDisplayField('appointment');
        $this->setPrimaryKey('donorhospital_id');
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
            ->integer('donor_id')
            ->requirePresence('donor_id', 'create')
            ->notEmptyString('donor_id');

        $validator
            ->integer('hospital_id')
            ->requirePresence('hospital_id', 'create')
            ->notEmptyString('hospital_id');

        $validator
            ->scalar('appointment')
            ->maxLength('appointment', 100)
            ->requirePresence('appointment', 'create')
            ->notEmptyString('appointment');

        return $validator;
    }
}
