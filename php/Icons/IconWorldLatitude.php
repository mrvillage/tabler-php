<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWorldLatitude extends \Tabler\Icon {
    public static function getName(): string {
        return 'world-latitude';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M4.6 7l14.8 0" />   <path d="M3 12l18 0" />   <path d="M4.6 17l14.8 0" />
        SVG;
    }
}