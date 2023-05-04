<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSlash extends Tabler\Icon {
    public static function getName(): string {
        return 'slash';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 5l-10 14" />
        SVG;
    }
}