<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSearchOff extends Tabler\Icon {
    public static function getName(): string {
        return 'search-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.039 5.062a7 7 0 0 0 9.91 9.89m1.584 -2.434a7 7 0 0 0 -9.038 -9.057" />   <path d="M3 3l18 18" />
        SVG;
    }
}