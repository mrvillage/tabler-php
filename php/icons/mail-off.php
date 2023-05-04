<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMailOff extends Tabler\Icon {
    public static function getName(): string {
        return 'mail-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5h10a2 2 0 0 1 2 2v10m-2 2h-14a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2" />   <path d="M3 7l9 6l.565 -.377m2.435 -1.623l6 -4" />   <path d="M3 3l18 18" />
        SVG;
    }
}