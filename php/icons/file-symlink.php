<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFileSymlink extends Icon {
    public static function getName(): string {
        return 'file-symlink';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 21v-4a3 3 0 0 1 3 -3h5" />   <path d="M9 17l3 -3l-3 -3" />   <path d="M14 3v4a1 1 0 0 0 1 1h4" />   <path d="M5 11v-6a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-9.5" />
        SVG;
    }
}