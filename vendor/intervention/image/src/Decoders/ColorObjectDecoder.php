<?php

declare(strict_types=1);

namespace Intervention\Image\Decoders;

use Intervention\Image\Drivers\AbstractDecoder;
use Intervention\Image\Exceptions\DecoderException;
use Intervention\Image\Interfaces\ColorInterface;
use Intervention\Image\Interfaces\ImageInterface;

class ColorObjectDecoder extends AbstractDecoder
{
    /**
     * {@inheritdoc}
     *
     * @see DecoderInterface::decode()
     */
    public function decode(mixed $input): ImageInterface|ColorInterface
    {
        if (!is_a($input, ColorInterface::class)) {
            throw new DecoderException('Unable to decode input');
        }

        return $input;
    }
}
