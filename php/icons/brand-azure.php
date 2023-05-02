<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandAzure extends Icon {
    public static function getName(): string {
        return 'brand-azure';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 7.5l-4 9.5h4l6 -15z" />   <path d="M22 20l-7 -15l-3 7l4 5l-8 3z" />
        SVG;
    }
}