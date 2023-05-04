<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconColumns2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'columns-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v16a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1zm9 -1v18" />
        SVG;
    }
}