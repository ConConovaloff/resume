<?php

namespace AppBundle\Command;


use AppBundle\Pattern\Singleton\Singleton;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PatternSingletonCommand extends Command
{
    protected function configure()
    {
        $this->setName('pattern:singleton')
            ->setDescription('Синглетон');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Цель: только один объект класса на все приложение',
            '',
            'Примеры:',
            ' - DB Connector -- нужен только один коннект к базе на все приложение',
            ' - Logger -- нужен только один объект логера на все приложение',
            ''
        ]);

        $output->writeln('try catch не отловит эту ошибку и вернет: <error>Call to private Singleton::__construct() from context</error>');
        // try catch не отловит эту ошибку:
        // try{
        //    $singleton = new Singleton();
        // } catch (\Exception $e) {
        //     $output->writeln(['При попытке создать объект, получаем: ' . get_class($e) . ': ' . $e->getMessage()]);
        // }

        $singleton = Singleton::getInstance();
        $singleton->some('МоеЗначние');

        $singletonSecond = Singleton::getInstance();
        $output->writeln(['Значение во втором объекте: ' . $singletonSecond->some()]);
    }
}