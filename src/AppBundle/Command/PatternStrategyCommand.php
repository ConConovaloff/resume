<?php

namespace AppBundle\Command;


use AppBundle\Pattern\Singleton\Singleton;
use AppBundle\Pattern\Strategy\Player;
use AppBundle\Pattern\Strategy\WeaponBowStrategy;
use AppBundle\Pattern\Strategy\WeaponSwordStrategy;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PatternStrategyCommand extends Command
{
    protected function configure()
    {
        $this->setName('pattern:strategy')
            ->setDescription('Стратегия');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Цель: ',
            ' - иметь несколько стратегий поведедения и легко менять их между собой',
            '',
            'Примеры:',
            ' - Player -- объект игрока вызывает метод attack() который использует $this->weaponObject для произведения действий',
            ' - Сортировка -- Менять стратегию сортировки. Например, по id или по дате',
            ''
        ]);

        $player = new Player();
        $player->setWeapon(new WeaponSwordStrategy());
        $output->writeln($player->attack("skeleton"));

        $player->setWeapon(new WeaponBowStrategy());
        $output->writeln($player->attack("skeleton"));
    }
}