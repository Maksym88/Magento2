<?php

namespace ALevel\HomeworkObserver\Console;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CustomerCommand
 * @package ALevel\HomeworkObserver\Console
 */
class CustomerCommand extends Command
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
     * @return int|void
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    )
    {
        $output->writeln('Test Command Alevel');

        $fs = new Filesystem();

        if ($fs->exists('genereted')){
            $fs->remove(['genereted/code']);
            $output->writeln('Clear genereted folder');
        }else{
            $output->writeln('Can\'t find directory');
        }
    }
}