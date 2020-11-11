<?php

namespace App\Http\Controllers;

use App\Services\CountryService;
use Exception;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * @var countryService
     */
    protected $countryService;

    /**
     * CountryController Constructor
     *
     * @param CountryService $countryService
     *
     */
    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $params)
    {
        $request = $params->all();
        $selectedMenu = $params['sort'] ?? null;

        $data = $this->countryService->getAll($request);

        return view('country.index', compact('data', 'selectedMenu'));
    }
}
