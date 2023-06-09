<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEaseIn extends \Tabler\Icon {
    public static function getName(): string {
        return 'ease-in';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 20c8 0 18 -16 18 -16" />
        SVG;
    }
}