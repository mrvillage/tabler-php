<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandHbo extends Icon {
    public static function getName(): string {
        return 'brand-hbo';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 16v-8" />   <path d="M6 8v8" />   <path d="M2 12h4" />   <path d="M9 16h2a2 2 0 1 0 0 -4h-2h2a2 2 0 1 0 0 -4h-2v8z" />   <path d="M19 8a4 4 0 1 1 0 8a4 4 0 0 1 0 -8z" />   <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}