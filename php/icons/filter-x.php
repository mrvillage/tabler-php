<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFilterX extends Icon {
    public static function getName(): string {
        return 'filter-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.785 19.405l-4.785 1.595v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}