<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFolderX extends Tabler\Icon {
    public static function getName(): string {
        return 'folder-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.5 19h-8.5a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v4" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}