<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandValorant extends Icon {
    public static function getName(): string {
        return 'brand-valorant';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14.5 14h4.5l2 -2v-6z" />   <path d="M9 19h5l-11 -13v6z" />
        SVG;
    }
}