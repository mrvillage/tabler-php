<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFireHydrant extends Icon {
    public static function getName(): string {
        return 'fire-hydrant';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 21h14" />   <path d="M17 21v-5h1a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1h-1v-4a5 5 0 0 0 -10 0v4h-1a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h1v5" />   <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 8h12" />
        SVG;
    }
}