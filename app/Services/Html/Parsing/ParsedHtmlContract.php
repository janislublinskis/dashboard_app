<?php


namespace App\Services\Html\Parsing;

interface ParsedHtmlContract
{
    public function getNewsPosts(): array;

    public function getWeatherDegrees(): string;

    public function getWeatherIcon(): string;
}
