<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTruckLoading extends Tabler\Icon {
    public static function getName(): string {
        return 'truck-loading';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 3h1a2 2 0 0 1 2 2v10a2 2 0 0 0 2 2h15" />   <path d="M9 6m0 3a3 3 0 0 1 3 -3h4a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-4a3 3 0 0 1 -3 -3z" />   <path d="M9 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}