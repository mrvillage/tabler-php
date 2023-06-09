<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandDenodo extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-denodo';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 11h2v2h-2z" />   <path d="M3.634 15.634l1.732 -1l1 1.732l-1.732 1z" />   <path d="M11 19h2v2h-2z" />   <path d="M18.634 14.634l1.732 1l-1 1.732l-1.732 -1z" />   <path d="M17.634 7.634l1.732 -1l1 1.732l-1.732 1z" />   <path d="M11 3h2v2h-2z" />   <path d="M3.634 8.366l1 -1.732l1.732 1l-1 1.732z" />
        SVG;
    }
}