<?php

declare(strict_types=1);

namespace WordPlate\Acf\Fields;

use InvalidArgumentException;
use WordPlate\Acf\Fields\Attributes\Dimensions;
use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\Library;
use WordPlate\Acf\Fields\Attributes\MimeTypes;
use WordPlate\Acf\Fields\Attributes\MinMax;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\ReturnFormat;
use WordPlate\Acf\Fields\Attributes\Wrapper;

class Gallery extends Field
{
    use Dimensions, Instructions, Library, MimeTypes, MinMax, Required, ReturnFormat, Wrapper;

    protected $type = 'gallery';

    public function insert(string $insert): self
    {
        if (!in_array($insert, ['append', 'prepend'])) {
            throw new InvalidArgumentException("Invalid argument insert [$insert]");
        }

        $this->config->set('insert', $insert);

        return $this;
    }
}
