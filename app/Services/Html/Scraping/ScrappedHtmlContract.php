<?php


namespace App\Services\Html\Scraping;

interface ScrappedHtmlContract
{
    public function scrapNamesDay(): string;

    public function scrapWindSpeed(): string;
}
