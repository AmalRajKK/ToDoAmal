<?php
namespace App;

class TodoList {
  private $tasks;

  public function __construct() {
    $this->tasks = [];
  }

  public function addTask(TaskInterface $task): void {
    $this->tasks[] = $task;
    echo "Task added successfully!\n";
  }

  public function removeTask(int $taskNo): void {
    if (isset($this->tasks[$taskNo])) {
      unset($this->tasks[$taskNo]);
      echo "Task removed successfully!\n";
    } else {
      echo "Invalid task number!\n";
    }
  }

  public function getAllTasks(): array {
    return $this->tasks;
  }

  public function getPendingTasks(): array {
    $pendingTasks = [];
    foreach ($this->tasks as $task) {
      if (!$task->isCompleted()) {
        $pendingTasks[] = $task;
      }
    }
    return $pendingTasks;
  }

  public function getCompletedTasks(): array {
    $completedTasks = [];
    foreach ($this->tasks as $task) {
      if ($task->isCompleted()) {
        $completedTasks[] = $task;
      }
    }
    return $completedTasks;
  }
}

