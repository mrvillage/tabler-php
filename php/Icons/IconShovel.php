<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShovel extends \Tabler\Icon {
    public static function getName(): string {
        return 'shovel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 4l3 3" />   <path d="M18.5 5.5l-8 8" />   <path d="M8.276 11.284l4.44 4.44a.968 .968 0 0 1 0 1.369l-2.704 2.704a4.108 4.108 0 0 1 -5.809 -5.81l2.704 -2.703a.968 .968 0 0 1 1.37 0z" />
        SVG;
    }
}