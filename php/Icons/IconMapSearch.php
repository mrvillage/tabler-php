<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMapSearch extends \Tabler\Icon {
    public static function getName(): string {
        return 'map-search';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 18l-2 -1l-6 3v-13l6 -3l6 3l6 -3v8" />   <path d="M9 4v13" />   <path d="M15 7v5" />   <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M20.2 20.2l1.8 1.8" />
        SVG;
    }
}