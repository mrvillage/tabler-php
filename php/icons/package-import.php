<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPackageImport extends Tabler\Icon {
    public static function getName(): string {
        return 'package-import';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" />   <path d="M12 12l8 -4.5" />   <path d="M12 12v9" />   <path d="M12 12l-8 -4.5" />   <path d="M22 18h-7" />   <path d="M18 15l-3 3l3 3" />
        SVG;
    }
}