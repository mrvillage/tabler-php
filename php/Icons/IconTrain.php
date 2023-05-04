<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTrain extends \Tabler\Icon {
    public static function getName(): string {
        return 'train';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 13c0 -3.87 -3.37 -7 -10 -7h-8" />   <path d="M3 15h16a2 2 0 0 0 2 -2" />   <path d="M3 6v5h17.5" />   <path d="M3 10l0 4" />   <path d="M8 11l0 -5" />   <path d="M13 11l0 -4.5" />   <path d="M3 19l18 0" />
        SVG;
    }
}