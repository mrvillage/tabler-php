<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandCpp extends Icon {
    public static function getName(): string {
        return 'brand-cpp';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 12h4" />   <path d="M20 10v4" />   <path d="M11 12h4" />   <path d="M13 10v4" />   <path d="M9 9a3 3 0 0 0 -3 -3h-.5a3.5 3.5 0 0 0 -3.5 3.5v5a3.5 3.5 0 0 0 3.5 3.5h.5a3 3 0 0 0 3 -3" />
        SVG;
    }
}