<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandNationalGeographic extends Icon {
    public static function getName(): string {
        return 'brand-national-geographic';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3h10v18h-10z" />
        SVG;
    }
}