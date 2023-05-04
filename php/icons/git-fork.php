<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGitFork extends Icon {
    public static function getName(): string {
        return 'git-fork';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 8v2a2 2 0 0 0 2 2h6a2 2 0 0 0 2 -2v-2" />   <path d="M12 12l0 4" />
        SVG;
    }
}