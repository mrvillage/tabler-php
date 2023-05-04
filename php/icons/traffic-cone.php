<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTrafficCone extends Tabler\Icon {
    public static function getName(): string {
        return 'traffic-cone';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20l16 0" />   <path d="M9.4 10l5.2 0" />   <path d="M7.8 15l8.4 0" />   <path d="M6 20l5 -15h2l5 15" />
        SVG;
    }
}