<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandDolbyDigital extends Icon {
    public static function getName(): string {
        return 'brand-dolby-digital';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 6v12h-.89c-3.34 0 -6.047 -2.686 -6.047 -6s2.707 -6 6.046 -6h.891z" />   <path d="M3.063 6v12h.891c3.34 0 6.046 -2.686 6.046 -6s-2.707 -6 -6.046 -6h-.89z" />
        SVG;
    }
}