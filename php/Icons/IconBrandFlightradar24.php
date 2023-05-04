<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandFlightradar24 extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-flightradar24';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 12m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />   <path d="M8.5 20l3.5 -8l-6.5 6" />   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}