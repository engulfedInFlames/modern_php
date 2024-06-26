<?php

// Inheritance

namespace Toaster;

class Toaster
{
  protected array $slices = [];
  protected int $size = 2;

  public function addSlice(string $slice): void
  {
    if (count($this->slices) < $this->size) {
      $this->slices[] = $slice;
    }
  }

  public function toast()
  {
    foreach ($this->slices as $i => $slice) {
      echo ($i + 1) . ": Toasting " . $slice . "<br/>";
    }
  }
}
