<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donor Model
 *
 * @method \App\Model\Entity\Donor newEmptyEntity()
 * @method \App\Model\Entity\Donor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Donor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Donor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Donor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Donor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Donor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Donor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Donor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Donor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Donor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donor> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DonorTable extends Table
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

        $this->setTable('donor');
        $this->setDisplayField('donor_ID');
        $this->setPrimaryKey('donor_ID');
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
            ->integer('donor_name')
            ->requirePresence('donor_name', 'create')
            ->notEmptyString('donor_name');

        $validator
            ->integer('donor_contact')
            ->requirePresence('donor_contact', 'create')
            ->notEmptyString('donor_contact');

        $validator
            ->integer('donor_address')
            ->requirePresence('donor_address', 'create')
            ->notEmptyString('donor_address');

        return $validator;
    }
}
