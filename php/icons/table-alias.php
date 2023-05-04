<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTableAlias extends Tabler\Icon {
    public static function getName(): string {
        return 'table-alias';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12v-7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-7" />   <path d="M3 10h18" />   <path d="M10 3v10" />   <path d="M2 17a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-4z" />
        SVG;
    }
}