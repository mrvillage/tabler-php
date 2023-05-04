<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAnalyze extends \Tabler\Icon {
    public static function getName(): string {
        return 'analyze';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 11a8.1 8.1 0 0 0 -6.986 -6.918a8.095 8.095 0 0 0 -8.019 3.918" />   <path d="M4 13a8.1 8.1 0 0 0 15 3" />   <path d="M19 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M5 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        SVG;
    }
}