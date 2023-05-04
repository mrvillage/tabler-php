<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconReport extends Icon {
    public static function getName(): string {
        return 'report';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697" />   <path d="M18 14v4h4" />   <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2" />   <path d="M8 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />   <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M8 11h4" />   <path d="M8 15h3" />
        SVG;
    }
}