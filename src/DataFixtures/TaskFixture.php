<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TaskFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1;$i<=10;$i++){
            $task=new Task();
            $task->setTitle("Task number : ".$i);
            $task->setDescription("Task description : ".$i);
            $manager->persist($task);
        }

        $manager->flush();
    }
}
