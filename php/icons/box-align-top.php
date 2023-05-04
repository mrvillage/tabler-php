<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBoxAlignTop extends Icon {
    public static function getName(): string {
        return 'box-align-top';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 9.505h16v-5a1 1 0 0 0 -1 -1h-14a1 1 0 0 0 -1 1v5z" />   <path d="M4 14.505v-.01" />   <path d="M4 19.505v-.01" />   <path d="M9 19.505v-.01" />   <path d="M15 19.505v-.01" />   <path d="M20 19.505v-.01" />   <path d="M20 14.505v-.01" />
        SVG;
    }
}