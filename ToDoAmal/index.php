<?php

require_once dirname(__FILE__) . '/autoload.php';

use App\UserInPut;
use App\TodoList;
use App\Task;
$todoList = new TodoList();
$ui = new UserInPut();

while (true) {
  $ui->displayMenu();
  $choice = $ui->getUserInput("Choice");

  switch ($choice) {
    case 1:  // Add Task
      $description = $ui->getUserInput("Task description");
      $dueDate = $ui->getUserInput("Due date (optional, YYYY-MM-DD format)");
      $newTask = new Task($description, $dueDate);
      $todoList->addTask($newTask);
      break;
    case 2:  // Remove Task
      $taskId = $ui->getUserInput("Task Number to remove");
      $todoList->removeTask($taskId);
      break;
    case 3:  // List All Tasks
      $tasks = $todoList->getAllTasks();
      $ui->displayTasks($tasks);
      break;
    case 4:  // List Pending Tasks
      $tasks = $todoList->getPendingTasks();
      $ui->displayTasks($tasks);
      break;
    case 5:  // List Completed Tasks
      $tasks = $todoList->getCompletedTasks();
      $ui->displayTasks($tasks);
      break;
    case 6:  // Mark Task Complete
      $taskNo = $ui->getUserInput("Task Number to mark complete");
      $tasks = $todoList->getAllTasks();
      if (isset($tasks[$taskNo])) {
        $tasks[$taskNo]->setCompleted(true);
        echo "Task marked complete!\n";
      } else {
        echo "Invalid task ID!\n";
      }
      break;
    case 7:  // Exit
      echo "Exiting...\n";
      exit;
    default:
      echo "Invalid choice!\n";
  }
}

