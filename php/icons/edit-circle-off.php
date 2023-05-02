<?php
require_once(__DIR__ . '/../Icon.php');

class IconEditCircleOff extends Icon {
    public static function getName(): string {
        return 'edit-circle-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10.507 10.498l-1.507 1.502v3h3l1.493 -1.498m2 -2.01l4.89 -4.907a2.1 2.1 0 0 0 -2.97 -2.97l-4.913 4.896" />   <path d="M16 5l3 3" />   <path d="M7.476 7.471a7 7 0 0 0 2.524 13.529a7 7 0 0 0 6.53 -4.474" />   <path d="M3 3l18 18" />
        SVG;
    }
}