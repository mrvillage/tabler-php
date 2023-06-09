<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFolderExclamation extends \Tabler\Icon {
    public static function getName(): string {
        return 'folder-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 19h-10a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v3.5" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}