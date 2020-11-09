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
     * CountryRepository constructor
     */
    public function __construct(Country $country)
    {
        $this->country = $country;
    }
}
