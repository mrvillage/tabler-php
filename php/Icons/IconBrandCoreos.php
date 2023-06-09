<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandCoreos extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-coreos';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12a9 9 0 1 1 -18 0a9 9 0 0 1 18 0z" />   <path d="M12 3c-3.263 3.212 -3 7.654 -3 12c4.59 .244 8.814 -.282 12 -3" />   <path d="M9.5 9a4.494 4.494 0 0 1 5.5 5.5" />
        SVG;
    }
}