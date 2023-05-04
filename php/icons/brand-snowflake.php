<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandSnowflake extends Icon {
    public static function getName(): string {
        return 'brand-snowflake';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 21v-5.5l4.5 2.5" />   <path d="M10 21v-5.5l-4.5 2.5" />   <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />   <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />   <path d="M10 3v5.5l-4.5 -2.5" />   <path d="M14 3v5.5l4.5 -2.5" />   <path d="M12 11l1 1l-1 1l-1 -1z" />
        SVG;
    }
}