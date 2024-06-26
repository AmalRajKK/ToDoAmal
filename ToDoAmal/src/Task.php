<?php
namespace App;
use App\TaskInterface;
class Task implements TaskInterface {
  private $description;
  private $dueDate;
  private $isCompleted;

  public function __construct(string $description, ?string $dueDate = null) {
    $this->description = $description;
    $this->dueDate = $dueDate;
    $this->isCompleted = false;
  }

  public function getDescription(): string {
    return $this->description;
  }

  public function getDueDate(): ?string {
    return $this->dueDate;
  }

  public function isCompleted(): bool {
    return $this->isCompleted;
  }

  public function setCompleted(bool $isCompleted): void {
    $this->isCompleted = $isCompleted;
  }
}
