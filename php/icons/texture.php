<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTexture extends Tabler\Icon {
    public static function getName(): string {
        return 'texture';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 3l-3 3" />   <path d="M21 18l-3 3" />   <path d="M11 3l-8 8" />   <path d="M16 3l-13 13" />   <path d="M21 3l-18 18" />   <path d="M21 8l-13 13" />   <path d="M21 13l-8 8" />
        SVG;
    }
}