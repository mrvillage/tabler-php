<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconColumns1 extends Icon {
    public static function getName(): string {
        return 'columns-1';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 3m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v16a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z" />
        SVG;
    }
}