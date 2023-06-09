<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTruckDelivery extends \Tabler\Icon {
    public static function getName(): string {
        return 'truck-delivery';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />   <path d="M3 9l4 0" />
        SVG;
    }
}