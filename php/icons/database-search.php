<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDatabaseSearch extends Icon {
    public static function getName(): string {
        return 'database-search';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3" />   <path d="M4 6v6c0 1.657 3.582 3 8 3m8 -3.5v-5.5" />   <path d="M4 12v6c0 1.657 3.582 3 8 3" />   <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M20.2 20.2l1.8 1.8" />
        SVG;
    }
}