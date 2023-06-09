<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLetterF extends \Tabler\Icon {
    public static function getName(): string {
        return 'letter-f';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 4h-10v16" />   <path d="M7 12l8 0" />
        SVG;
    }
}