<?php


namespace App\Services\Html\Parsing;

use Carbon\Carbon;
use DateTime;
use PicoFeed\Parser\Item;
use PicoFeed\Reader\Reader;

class ParsedHtmlProvider implements ParsedHtmlContract
{
    protected string $newsEndpoint = 'https://www.diena.lv/rss/';
    protected string $weatherEndpoint = 'http://rss.accuweather.com/rss/liveweather_rss.asp?metric=1&locCode=riga';
    private string $weatherForecast;

    public function __construct()
    {
        $this->weatherForecast = $this->getWeatherForecast();
    }

    private function parseHtml(string $url): array
    {
        $reader = new Reader;
        $resource = $reader->download($url);

        $parser = $reader->getParser(
            $resource->getUrl(),
            $resource->getContent(),
            $resource->getEncoding()
        );

        return $parser->execute()->getItems();
    }

    public function getNewsPosts(): array
    {
        $news = $this->parseHtml($this->newsEndpoint);
        $posts = [];

        for ($i = 0; $i < 2; $i++) {
            $posts[] = [
                'title' => $news[$i]->getTitle(),
                'content' => $this->decodeContent($news[$i]),
                'imageUrl' => $news[$i]->getEnclosureUrl(),
                'date' => $this->getFormattedDate($news[$i]->getDate(), 'h:i d.m.y'),
            ];
        }

        return $posts;
    }

    private function decodeContent(Item $post): string
    {
        return str_replace('_', '', htmlspecialchars_decode(strip_tags($post->getContent())));
    }

    private function getWeatherForecast(): string
    {
        $items = $this->parseHtml($this->weatherEndpoint);

        return $items[0]->getContent();
    }

    public function getWeatherDegrees(): string
    {
        $weather = substr($this->weatherForecast, strpos($this->weatherForecast, ':') + 1);

        return str_replace(' ', '', substr($weather, 0, strpos($weather, '°') + 2));
    }


    public function getWeatherIcon(): string
    {
        return substr(
            $this->weatherForecast, strpos($this->weatherForecast, 'src="') + 5,
            strpos($this->weatherForecast, '"/>') - strpos($this->weatherForecast, 'src="') - 5
        );
    }

    private function getFormattedDate(DateTime $dateTime, string $format): string
    {
        Carbon::setLocale('lv');

        return ucfirst(Carbon::parse($dateTime)->translatedFormat($format));
    }
}
