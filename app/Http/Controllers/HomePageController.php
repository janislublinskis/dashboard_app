<?php


namespace App\Http\Controllers;

use App\Repository\PlannedActivities\PlannedActivitiesContract;
use App\Services\Html\Parsing\ParsedHtmlContract;
use App\Services\Html\Scraping\ScrappedHtmlContract;
use Carbon\Carbon;

class HomePageController
{
    private ParsedHtmlContract $parsedHtmlService;
    private ScrappedHtmlContract $scrappedHtmlService;
    private PlannedActivitiesContract $plannedActivitiesRepository;

    public function __construct(
        ParsedHtmlContract $parsedHtmlService,
        ScrappedHtmlContract $scrappedHtmlService,
        PlannedActivitiesContract $plannedActivitiesRepository
    )
    {
        $this->parsedHtmlService = $parsedHtmlService;
        $this->scrappedHtmlService = $scrappedHtmlService;
        $this->plannedActivitiesRepository = $plannedActivitiesRepository;
    }

    public function index()
    {
        return view('welcome')
            ->with('date', ucfirst(Carbon::now()->translatedFormat('l, d.m.Y')))
            ->with('posts', $this->parsedHtmlService->getNewsPosts())
            ->with('weatherIcon', $this->parsedHtmlService->getWeatherIcon())
            ->with('weatherForecast', $this->prepareWeatherForecast())
            ->with('namesDay', $this->scrappedHtmlService->scrapNamesDay())
            ->with('classTags', ['short', 'full'])
            ->with('plannedActivities', $this->plannedActivitiesRepository->getPlannedActivities())
            ;
    }

    private function prepareWeatherForecast(): string
    {
        $degrees = $this->parsedHtmlService->getWeatherDegrees();
        $windSpeed = $this->scrappedHtmlService->scrapWindSpeed();

        return ' ' . $degrees . ', ' . $windSpeed . ' m/s';
    }
}
