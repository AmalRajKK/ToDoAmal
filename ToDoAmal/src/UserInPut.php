<?php
namespace App;
class UserInPut {
  public function displayMenu() {
    echo "1. Add Task\n";
    echo "2. Remove Task\n";
    echo "3. List All Tasks\n";
    echo "4. List Pending Tasks\n";
    echo "5. List Completed Tasks\n";
    echo "6. Mark Task Complete\n";
    echo "7. Exit\n";
  }

  public function getUserInput($prompt) {
    return readline($prompt . ": ");
  }

  public function displayTasks($tasks) {
    $i = 1;
    foreach ($tasks as $task) {
      echo $i . ". " . $task->getDescription() . "\n";
      $i++;
    }
  }
}
