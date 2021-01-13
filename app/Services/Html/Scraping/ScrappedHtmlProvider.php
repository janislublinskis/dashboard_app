<?php


namespace App\Services\Html\Scraping;

use KubAT\PhpSimple\HtmlDomParser;
use simple_html_dom\simple_html_dom;

class ScrappedHtmlProvider implements ScrappedHtmlContract
{
    protected string $namesDayEndpoint = 'https://www.lsm.lv/';

    private simple_html_dom $html;

    public function __construct()
    {
        $this->html = $this->scrapHtml();
    }

    private function scrapHtml(): simple_html_dom
    {
        return HtmlDomParser::file_get_html($this->namesDayEndpoint);
    }

    public function scrapNamesDay(): string
    {
        $namesDayContent = $this->html->find('section[class=globalnav__item globalnav__item-today]', 0)
            ->children(1)
            ->nodes[0]
            ->_[4];

        return str_replace('dienas', 'dienas svin', $namesDayContent);
    }

    public function scrapWindSpeed(): string
    {
        $windSpeedNode = $this->html->find('a[href=/laika-zinas/]', 0)->nodes[3]->_[4];

        return intval(substr(
                $windSpeedNode,
                strrpos($windSpeedNode, ' ') + 1,
                strrpos($windSpeedNode, 'm') - strrpos($windSpeedNode, ' ') - 1)
        );
    }
}
