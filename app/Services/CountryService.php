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
     * @var $fields
     */
    private array $fields;

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
        $this->fields = [
            'field_1' => 'code',
            'field_2' => 'name',
        ];
        $this->countryRepository = $countryRepository;
    }

    /**
     * Get all countries.
     *
     * @return String
     */
    public function getAll($params = null)
    {
        $this->setFieldOrder($params);

        $sortParam = $this->getSortParameter($params);

        $countries = $this->countryRepository->getAll($sortParam);

        return [
            'fieldOrder' => $this->fields,
            'countries' => $countries
        ];
    }

    private function setFieldOrder($params = null): void
    {
        if (array_key_exists('sort', $params) && $params['sort'] === 'name') {
            $this->fields = [
                'field_1' => 'name',
                'field_2' => 'code',
            ];
        }
    }

    /**
     * @return String
     */
    private function getSortParameter($param = null)
    {
        if(!array_key_exists('sort', $param)) {
            return 'id';
        }

        return in_array($param['sort'], ['code', 'name']) ? $param['sort'] : 'id';
    }
}
