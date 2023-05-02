<?php
require_once('../Icon.php');

class IconBrandStackshare extends Icon {
    public static function getName(): string {
        return 'brand-stackshare';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 12h3l3.5 6h3.5" />   <path d="M17 6h-3.5l-3.5 6" />
        SVG;
    }
}