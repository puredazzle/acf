<?php

declare(strict_types=1);

namespace WordPlate\Acf\Fields;

use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\Library;
use WordPlate\Acf\Fields\Attributes\MimeTypes;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\ReturnFormat;
use WordPlate\Acf\Fields\Attributes\Wrapper;

class File extends Field
{
    use Instructions, Library, MimeTypes, Required, ReturnFormat, Wrapper;

    protected $type = 'file';

    public function size($min, $max): self
    {
        $this->config->set('min_size', $min);
        $this->config->set('max_size', $max);

        return $this;
    }
}
