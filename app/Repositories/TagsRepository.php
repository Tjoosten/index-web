<?php 

namespace App\Repositories;

use App\Tags;
use ActivismeBE\DatabaseLayering\Repositories\Contracts\RepositoryInterface;
use ActivismeBE\DatabaseLayering\Repositories\Eloquent\Repository;

/**
 * Class TagsRepository
 *
 * @package App\Repositories
 */
class TagsRepository extends Repository
{

    /**
     * Set the eloquent model class for the repository.
     *
     * @return string
     */
    public function model()
    {
        return Tags::class;
    }
}