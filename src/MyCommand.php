<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MyCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('myapp')
            ->setDescription('MyConsole application')
            ->addArgument(
                'args',
                InputArgument::IS_ARRAY,
                'arguments'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $args = $input->getArgument('args');
        foreach ($args as $v) {
            $output->writeln($v);
        }
    }
}
