<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWalletOff extends Icon {
    public static function getName(): string {
        return 'wallet-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 8v-3a1 1 0 0 0 -1 -1h-8m-3.413 .584a2 2 0 0 0 1.413 3.416h2m4 0h6a1 1 0 0 1 1 1v3" />   <path d="M19 19a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />   <path d="M16 12h4v4m-4 0a2 2 0 0 1 -2 -2" />   <path d="M3 3l18 18" />
        SVG;
    }
}