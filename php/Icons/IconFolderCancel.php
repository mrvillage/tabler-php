<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFolderCancel extends \Tabler\Icon {
    public static function getName(): string {
        return 'folder-cancel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 19h-7a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v3" />   <path d="M19 19m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 21l4 -4" />
        SVG;
    }
}