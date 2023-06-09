<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLiveView extends \Tabler\Icon {
    public static function getName(): string {
        return 'live-view';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />   <path d="M4 16v2a2 2 0 0 0 2 2h2" />   <path d="M16 4h2a2 2 0 0 1 2 2v2" />   <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />   <path d="M12 11l0 .01" />   <path d="M12 18l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
        SVG;
    }
}