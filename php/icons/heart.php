<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHeart extends \Tabler\Icon {
    public static function getName(): string {
        return 'heart';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
        SVG;
    }
}