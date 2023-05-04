<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconContrast2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'contrast-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M4 18h2a6 6 0 0 0 6 -6a6 6 0 0 1 6 -6h2" />
        SVG;
    }
}