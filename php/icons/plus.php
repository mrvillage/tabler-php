<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlus extends \Tabler\Icon {
    public static function getName(): string {
        return 'plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5l0 14" />   <path d="M5 12l14 0" />
        SVG;
    }
}