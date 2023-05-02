<?php
require_once(__DIR__ . '../Icon.php');

class IconEyeExclamation extends Icon {
    public static function getName(): string {
        return 'eye-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M14.473 17.659a8.897 8.897 0 0 1 -2.473 .341c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}