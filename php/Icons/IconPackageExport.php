<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPackageExport extends \Tabler\Icon {
    public static function getName(): string {
        return 'package-export';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" />   <path d="M12 12l8 -4.5" />   <path d="M12 12v9" />   <path d="M12 12l-8 -4.5" />   <path d="M15 18h7" />   <path d="M19 15l3 3l-3 3" />
        SVG;
    }
}