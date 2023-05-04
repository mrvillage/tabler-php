<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMathIntegrals extends \Tabler\Icon {
    public static function getName(): string {
        return 'math-integrals';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 19a2 2 0 0 0 2 2c2 0 2 -4 3 -9s1 -9 3 -9a2 2 0 0 1 2 2" />   <path d="M11 19a2 2 0 0 0 2 2c2 0 2 -4 3 -9s1 -9 3 -9a2 2 0 0 1 2 2" />
        SVG;
    }
}