<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlusMinus extends Tabler\Icon {
    public static function getName(): string {
        return 'plus-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 7h6" />   <path d="M7 4v6" />   <path d="M20 18h-6" />   <path d="M5 19l14 -14" />
        SVG;
    }
}