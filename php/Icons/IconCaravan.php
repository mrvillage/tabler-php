<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCaravan extends \Tabler\Icon {
    public static function getName(): string {
        return 'caravan';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 18a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M11 18h7a2 2 0 0 0 2 -2v-7a2 2 0 0 0 -2 -2h-9.5a5.5 5.5 0 0 0 -5.5 5.5v3.5a2 2 0 0 0 2 2h2" />   <path d="M8 7l7 -3l1 3" />   <path d="M13 11m0 .5a.5 .5 0 0 1 .5 -.5h2a.5 .5 0 0 1 .5 .5v2a.5 .5 0 0 1 -.5 .5h-2a.5 .5 0 0 1 -.5 -.5z" />   <path d="M20 16h2" />
        SVG;
    }
}