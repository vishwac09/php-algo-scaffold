<?php

namespace PHPAlgorithmScaffold\Generator\File;

class Problem extends File
{
    /**
     * @inheritDoc
     */
    public function create(string $path, string $name): bool
    {
        $problemFile = new \Nette\PhpGenerator\PhpFile();
        $problemFile->addComment('Autogenerated file for problem ' . $name);
        $problemFile->addClass('LeetCode\Problems\\' . $name . '\\' . $name);
        file_put_contents($path . '/' . $name . '.php', $problemFile);
        return true;
    }
}
