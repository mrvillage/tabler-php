<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCoinOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'coin-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-1m-2.82 1.171a2 2 0 0 0 1.82 2.829h1m2.824 2.822a2 2 0 0 1 -1.824 1.178h-2a2 2 0 0 1 -1.8 -1" />   <path d="M20.042 16.045a9 9 0 0 0 -12.087 -12.087m-2.318 1.677a9 9 0 1 0 12.725 12.73" />   <path d="M12 6v2m0 8v2" />   <path d="M3 3l18 18" />
        SVG;
    }
}