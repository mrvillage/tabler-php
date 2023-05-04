<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAddressBookOff extends Icon {
    public static function getName(): string {
        return 'address-book-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h10a2 2 0 0 1 2 2v10m-.57 3.399c-.363 .37 -.87 .601 -1.43 .601h-10a2 2 0 0 1 -2 -2v-12" />   <path d="M10 16h6" />   <path d="M11 11a2 2 0 0 0 2 2m2 -2a2 2 0 0 0 -2 -2" />   <path d="M4 8h3" />   <path d="M4 12h3" />   <path d="M4 16h3" />   <path d="M3 3l18 18" />
        SVG;
    }
}