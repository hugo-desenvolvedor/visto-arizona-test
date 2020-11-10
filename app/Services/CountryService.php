<?php

namespace App\Services;

use App\Models\Country;
use App\Repositories\CountryRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class CountryService
{
    /**
     * @var $countryRepository
     */
    protected $countryRepository;

    /**
     * CountryService constructor.
     *
     * @param CountryRepository $countryRepository
     */
    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    /**
     * Get all countries.
     *
     * @return String
     */
    public function getAll($params = null)
    {
        $sort = $params['sort'] ?? 'id';

        $countries = $this->countryRepository->getAll($sort);
    }
}
