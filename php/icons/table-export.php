<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTableExport extends Icon {
    public static function getName(): string {
        return 'table-export';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 21h-7.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />   <path d="M3 10h18" />   <path d="M10 3v18" />   <path d="M16 19h6" />   <path d="M19 16l3 3l-3 3" />
        SVG;
    }
}