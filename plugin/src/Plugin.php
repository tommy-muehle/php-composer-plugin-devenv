<?php

namespace My\NewPlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;
use My\NewPlugin\Command\SampleCommand;

class Plugin implements PluginInterface, Capable, CommandProvider
{
    public function getCapabilities()
    {
        return [
            CommandProvider::class => get_class($this),
        ];
    }

    public function getCommands()
    {
        return [
            new SampleCommand,
        ];
    }

    public function activate(Composer $composer, IOInterface $io)
    {
        $io->write('Have fun on plugin development!');
    }

}
