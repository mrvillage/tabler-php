<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuildingFactory2 extends Tabler\Icon {
    public static function getName(): string {
        return 'building-factory-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21h18" />   <path d="M5 21v-12l5 4v-4l5 4h4" />   <path d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582" />   <path d="M9 17h1" />   <path d="M14 17h1" />
        SVG;
    }
}