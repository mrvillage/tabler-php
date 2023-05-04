<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHistoryOff extends Tabler\Icon {
    public static function getName(): string {
        return 'history-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3.05 11a8.975 8.975 0 0 1 2.54 -5.403m2.314 -1.697a9 9 0 0 1 12.113 12.112m-1.695 2.312a9 9 0 0 1 -14.772 -3.324m-.5 5v-5h5" />   <path d="M3 3l18 18" />
        SVG;
    }
}