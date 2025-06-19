<?php

declare(strict_types=1);

namespace Shared\Enums;

use Shared\Traits\UseToArray;

enum LanguageEnums: string
{
  use UseToArray;

  case Uz = 'uz';
  case Ru = 'ru';
  case En = 'en';
}
