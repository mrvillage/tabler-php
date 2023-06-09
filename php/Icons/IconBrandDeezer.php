<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandDeezer extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-deezer';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 16.5h2v.5h-2z" />   <path d="M8 16.5h2.5v.5h-2.5z" />   <path d="M16 17h-2.5v-.5h2.5z" />   <path d="M21.5 17h-2.5v-.5h2.5z" />   <path d="M21.5 13h-2.5v.5h2.5z" />   <path d="M21.5 9.5h-2.5v.5h2.5z" />   <path d="M21.5 6h-2.5v.5h2.5z" />   <path d="M16 13h-2.5v.5h2.5z" />   <path d="M8 13.5h2.5v-.5h-2.5z" />   <path d="M8 9.5h2.5v.5h-2.5z" />
        SVG;
    }
}