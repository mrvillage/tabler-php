<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBoxAlignTopLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'box-align-top-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 5v5a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1v-5a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1z" />   <path d="M15 4h-.01" />   <path d="M20 4h-.01" />   <path d="M20 9h-.01" />   <path d="M20 15h-.01" />   <path d="M4 15h-.01" />   <path d="M20 20h-.01" />   <path d="M15 20h-.01" />   <path d="M9 20h-.01" />   <path d="M4 20h-.01" />
        SVG;
    }
}