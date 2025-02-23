<?php
require "vendor/autoload.php";

use ScssPhp\ScssPhp\Compiler;
use Symfony\Component\Finder\Finder;

$scssDir = __DIR__ . '/assets/scss'; // Directory to watch
$scssFile = __DIR__ . '/assets/scss/style.scss'; // Main SCSS file
$cssFile = 'style.css'; // Output CSS file
$compiler = new Compiler();
$compiler->addImportPath($scssDir);

// Debounce delay in seconds
$debounceDelay = 1;

try {
    static $lastModifiedTimes = [];

    while (true) {
        clearstatcache();

        // Use Symfony Finder to get all SCSS files in the directory
        $finder = new Finder();
        $finder->files()->in($scssDir)->name('*.scss');

        $currentModifiedTimes = [];
        $hasChanged = false;

        foreach ($finder as $file) {
            $filePath = $file->getRealPath();
            $currentModifiedTimes[$filePath] = filemtime($filePath);

            if (!isset($lastModifiedTimes[$filePath]) || $currentModifiedTimes[$filePath] > $lastModifiedTimes[$filePath]) {
                $hasChanged = true;
            }
        }

        if ($hasChanged) {
            echo "Detected changes in SCSS files. Waiting $debounceDelay seconds...\n";
            sleep($debounceDelay);

            clearstatcache();

            // Recompile after debounce
            echo "Recompiling...\n";
            try {
                $scssContent = file_get_contents($scssFile);
                $css = $compiler->compileString($scssContent)->getCss();
                file_put_contents($cssFile, $css);
                echo "Recompiled successfully! CSS saved to $cssFile.\n";
            } catch (Exception $e) {
                echo "Compilation error: " . $e->getMessage() . "\n";
            }

            $lastModifiedTimes = $currentModifiedTimes; // Update modification times
        }

        sleep(1);
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
