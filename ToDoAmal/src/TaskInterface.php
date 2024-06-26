<?php
namespace App;

interface TaskInterface {
  public function getDescription(): string;
  public function getDueDate(): ?string;  // Allow null for optional due date
  public function isCompleted(): bool;
  public function setCompleted(bool $isCompleted): void;
}
