<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMinus extends Tabler\Icon {
    public static function getName(): string {
        return 'minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12l14 0" />
        SVG;
    }
}