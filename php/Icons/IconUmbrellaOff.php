<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconUmbrellaOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'umbrella-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12h-8c0 -2.209 .895 -4.208 2.342 -5.656m2.382 -1.645a8 8 0 0 1 11.276 7.301l-4 0" />   <path d="M12 12v6a2 2 0 1 0 4 0" />   <path d="M3 3l18 18" />
        SVG;
    }
}