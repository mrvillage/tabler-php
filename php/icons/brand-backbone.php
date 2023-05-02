<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandBackbone extends Icon {
    public static function getName(): string {
        return 'brand-backbone';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 20l14 -8l-14 -8z" />   <path d="M19 20l-14 -8l14 -8z" />
        SVG;
    }
}