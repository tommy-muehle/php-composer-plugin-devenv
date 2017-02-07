<?php

namespace My\NewPlugin\Command;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SampleCommand extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('new-plugin:sample')
            ->setDescription('@todo')
            ->setHelp(<<<EOT
@todo The <info>new-plugin:sample</info> command needs a description.</info>
EOT
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello plugin developer!');
    }
}
