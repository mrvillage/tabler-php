<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrackets extends \Tabler\Icon {
    public static function getName(): string {
        return 'brackets';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h-3v16h3" />   <path d="M16 4h3v16h-3" />
        SVG;
    }
}