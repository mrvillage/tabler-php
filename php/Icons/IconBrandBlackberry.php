<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandBlackberry extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-blackberry';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 6a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1z" />   <path d="M6 12a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1z" />   <path d="M13 12a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1z" />   <path d="M14 6a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1z" />   <path d="M12 18a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1z" />   <path d="M20 15a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1z" />   <path d="M21 9a1 1 0 0 0 -1 -1h-2l-.5 2h2.5a1 1 0 0 0 1 -1z" />
        SVG;
    }
}