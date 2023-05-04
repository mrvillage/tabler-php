<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconScanEye extends Tabler\Icon {
    public static function getName(): string {
        return 'scan-eye';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />   <path d="M4 16v2a2 2 0 0 0 2 2h2" />   <path d="M16 4h2a2 2 0 0 1 2 2v2" />   <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />   <path d="M7 12c3.333 -4.667 6.667 -4.667 10 0" />   <path d="M7 12c3.333 4.667 6.667 4.667 10 0" />   <path d="M12 12h-.01" />
        SVG;
    }
}