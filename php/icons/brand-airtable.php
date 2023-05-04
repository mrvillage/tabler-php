<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandAirtable extends Icon {
    public static function getName(): string {
        return 'brand-airtable';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 10v8l7 -3v-2.6z" />   <path d="M3 6l9 3l9 -3l-9 -3z" />   <path d="M14 12.3v8.7l7 -3v-8z" />
        SVG;
    }
}