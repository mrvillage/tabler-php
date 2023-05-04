<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDatabaseExport extends \Tabler\Icon {
    public static function getName(): string {
        return 'database-export';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3" />   <path d="M4 6v6c0 1.657 3.582 3 8 3c1.118 0 2.183 -.086 3.15 -.241" />   <path d="M20 12v-6" />   <path d="M4 12v6c0 1.657 3.582 3 8 3c.157 0 .312 -.002 .466 -.005" />   <path d="M16 19h6" />   <path d="M19 16l3 3l-3 3" />
        SVG;
    }
}