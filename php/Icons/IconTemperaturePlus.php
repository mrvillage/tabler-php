<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTemperaturePlus extends \Tabler\Icon {
    public static function getName(): string {
        return 'temperature-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 13.5a4 4 0 1 0 4 0v-8.5a2 2 0 0 0 -4 0v8.5" />   <path d="M8 9l4 0" />   <path d="M16 9l6 0" />   <path d="M19 6l0 6" />
        SVG;
    }
}