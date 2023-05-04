<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTallymark4 extends \Tabler\Icon {
    public static function getName(): string {
        return 'tallymark-4';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 5l0 14" />   <path d="M10 5l0 14" />   <path d="M14 5l0 14" />   <path d="M18 5l0 14" />
        SVG;
    }
}