<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAlbum extends \Tabler\Icon {
    public static function getName(): string {
        return 'album';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M12 4v7l2 -2l2 2v-7" />
        SVG;
    }
}