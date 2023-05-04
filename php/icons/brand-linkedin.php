<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandLinkedin extends Icon {
    public static function getName(): string {
        return 'brand-linkedin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M8 11l0 5" />   <path d="M8 8l0 .01" />   <path d="M12 16l0 -5" />   <path d="M16 16v-3a2 2 0 0 0 -4 0" />
        SVG;
    }
}