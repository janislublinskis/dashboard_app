<?php


namespace App\Http\Controllers;

use App\Services\Html\Parsing\ParsedHtmlContract;
use App\Services\Html\Scraping\ScrappedHtmlContract;

class ParseHtmlController
{
    private ParsedHtmlContract $parsedHtmlService;
    private ScrappedHtmlContract $scrappedHtmlService;

    public function __construct(
        ParsedHtmlContract $parsedHtmlService,
        ScrappedHtmlContract $scrappedHtmlService
    )
    {
        $this->parsedHtmlService = $parsedHtmlService;
        $this->scrappedHtmlService = $scrappedHtmlService;
    }

    public function index()
    {
        return view('welcome')
            ->with('date', now()->format('l, d.m.Y'))
            ->with('posts', $this->parsedHtmlService->getNewsPosts())
            ->with('weatherIcon', $this->parsedHtmlService->getWeatherIcon())
            ->with('weatherForecast', $this->prepareWeatherForecast())
            ->with('namesDay', $this->scrappedHtmlService->scrapNamesDay())
            ->with('classTags', ['short', 'full']);
    }

    private function prepareWeatherForecast(): string
    {
        $degrees = $this->parsedHtmlService->getWeatherDegrees();
        $windSpeed = $this->scrappedHtmlService->scrapWindSpeed();

        return ' ' . $degrees . ', ' . $windSpeed . ' m/s';
    }
}
