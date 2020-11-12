<?php

namespace App\Repositories;

use App\Models\Country;

class CountryRepository
{
    /**
     * @var Country
     */
    protected $country;

    /**
     * CountryRepository constructor.
     *
     * @param Country $country
     */
    public function __construct(Country $country)
    {
        $this->country = $country;
    }

    /**
     * Get all countries.
     *
     * @return Country $Country
     */
    public function getAll($sort = 'id')
    {
        return $this->country->orderBy($sort)->get();
    }
}
