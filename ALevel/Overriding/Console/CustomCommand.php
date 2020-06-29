<?php

namespace ALevel\Overriding\Console;

use Symfony\Component\Filesystem\Filesystem;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CustomCommand.
 *
 * @package ALevel\Overriding\Console
 */
class CustomCommand extends Command
{
    protected function configure()
    {
        $this->setName('alevel:test-command');
        $this->setDescription('Alevel Test Command');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int|void|null
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
        $output->writeln('Test command, Alevel');

        $fs = new Filesystem();

        if ($fs->exists('generated')) {
            $fs->remove(['generated/code']);
            $output->writeln('Clear generated folder');
        } else {
            $output->writeln('Can\'t find directory');
        }
    }
}
