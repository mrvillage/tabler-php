<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandFramer extends Icon {
    public static function getName(): string {
        return 'brand-framer';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 15h12l-12 -12h12v6h-12v6l6 6v-6" />
        SVG;
    }
}