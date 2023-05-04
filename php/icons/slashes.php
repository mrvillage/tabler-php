<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSlashes extends Icon {
    public static function getName(): string {
        return 'slashes';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 5l-10 14" />   <path d="M20 5l-10 14" />
        SVG;
    }
}