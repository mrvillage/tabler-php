<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandCrunchbase extends Icon {
    public static function getName(): string {
        return 'brand-crunchbase';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 19v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M10.414 11.586a2 2 0 1 0 0 2.828" />   <path d="M15 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M13 7v6" />
        SVG;
    }
}