<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandVite extends Icon {
    public static function getName(): string {
        return 'brand-vite';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 4.5l6 -1.5l-2 6.5l2 -.5l-4 7v-5l-3 1z" />   <path d="M15 6.5l7 -1.5l-10 17l-10 -17l7.741 1.5" />
        SVG;
    }
}