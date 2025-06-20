<?php

declare(strict_types=1);

namespace Shared\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Shared\Traits\UseToArray;

enum LanguageEnums: string implements HasIcon, HasColor, HasLabel
{
  use UseToArray;

  case Uz = 'uz';
  case Ru = 'ru';
  case En = 'en';

  public function getLabel(): string
  {
    return match ($this) {
      self::Uz => 'O\'zbekcha',
      self::Ru => 'Русский',
      self::En => 'English',
    };
  }

  public function getIcon(): ?string
  {
    return match ($this) {
      self::Uz => 'heroicon-o-globe-alt',
      self::Ru => 'heroicon-o-globe-alt',
      self::En => 'heroicon-o-globe-alt',
    };
  }

  public function getColor(): ?string
  {
    return match ($this) {
      self::Uz => 'primary',
      self::Ru => 'info',
      self::En => 'success',
    };
  }
}
