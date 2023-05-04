<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlanet extends \Tabler\Icon {
    public static function getName(): string {
        return 'planet';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18.816 13.58c2.292 2.138 3.546 4 3.092 4.9c-.745 1.46 -5.783 -.259 -11.255 -3.838c-5.47 -3.579 -9.304 -7.664 -8.56 -9.123c.464 -.91 2.926 -.444 5.803 .805" />   <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
        SVG;
    }
}