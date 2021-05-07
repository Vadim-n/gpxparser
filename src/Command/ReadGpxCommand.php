<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReadGpxCommand extends Command
{
    protected static $defaultName = 'test';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $a = 1;

        $output->writeln('hi');

        return 0;
    }
}