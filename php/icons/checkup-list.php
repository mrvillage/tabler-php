<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCheckupList extends Icon {
    public static function getName(): string {
        return 'checkup-list';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />   <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />   <path d="M9 14h.01" />   <path d="M9 17h.01" />   <path d="M12 16l1 1l3 -3" />
        SVG;
    }
}