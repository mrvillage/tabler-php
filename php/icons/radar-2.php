<?php
require_once(__DIR__ . '../Icon.php');

class IconRadar2 extends Icon {
    public static function getName(): string {
        return 'radar-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M15.51 15.56a5 5 0 1 0 -3.51 1.44" />   <path d="M18.832 17.86a9 9 0 1 0 -6.832 3.14" />   <path d="M12 12v9" />
        SVG;
    }
}