<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFolderCheck extends \Tabler\Icon {
    public static function getName(): string {
        return 'folder-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 19h-6a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v4" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}