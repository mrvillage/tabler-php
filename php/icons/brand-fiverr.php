<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandFiverr extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-fiverr';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 3h-2a6 6 0 0 0 -6 6h-3v4h3v8h4v-7h4v7h4v-11h-8v-1.033a1.967 1.967 0 0 1 2 -1.967h2v-4z" />
        SVG;
    }
}