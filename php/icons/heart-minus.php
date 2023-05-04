<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHeartMinus extends Tabler\Icon {
    public static function getName(): string {
        return 'heart-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 19l-1 1l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8 6" />   <path d="M14 16h6" />
        SVG;
    }
}