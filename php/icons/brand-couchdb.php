<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandCouchdb extends Icon {
    public static function getName(): string {
        return 'brand-couchdb';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 12h12v-2a2 2 0 0 1 2 -2a2 2 0 0 0 -2 -2h-12a2 2 0 0 0 -2 2a2 2 0 0 1 2 2v2z" />   <path d="M6 15h12" />   <path d="M6 18h12" />   <path d="M21 11v7" />   <path d="M3 11v7" />
        SVG;
    }
}