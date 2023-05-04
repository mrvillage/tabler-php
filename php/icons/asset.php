<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAsset extends Icon {
    public static function getName(): string {
        return 'asset';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 15m-6 0a6 6 0 1 0 12 0a6 6 0 1 0 -12 0" />   <path d="M9 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M14.218 17.975l6.619 -12.174" />   <path d="M6.079 9.756l12.217 -6.631" />   <path d="M9 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}