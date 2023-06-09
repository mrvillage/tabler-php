<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconListSearch extends \Tabler\Icon {
    public static function getName(): string {
        return 'list-search';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 15m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M18.5 18.5l2.5 2.5" />   <path d="M4 6h16" />   <path d="M4 12h4" />   <path d="M4 18h4" />
        SVG;
    }
}