<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconColumnInsertRight extends Icon {
    public static function getName(): string {
        return 'column-insert-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 4h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1z" />   <path d="M15 12l4 0" />   <path d="M17 10l0 4" />
        SVG;
    }
}