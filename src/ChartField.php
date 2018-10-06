<?php

namespace Ciudadbyte\ChartField;

use Laravel\Nova\Fields\Field;

class ChartField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'chart-field';

    public function type(string $type)
    {
        return $this->withMeta(['type' => $type]);
    }

    public function colors(array $colors)
    {
        return $this->withMeta(['colors' => $colors]);
    }

    public function innerRadius(int $innerRadius)
    {
        return $this->withMeta(['innerRadius' => $innerRadius]);
    }

    public function radius(int $radius)
    {
        return $this->withMeta(['radius' => $radius]);
    }

    public function delimiter(string $delimiter)
    {
        return $this->withMeta(['delimiter' => $delimiter]);
    }

    public function height(int $height)
    {
        return $this->withMeta(['height' => $height]);
    }

    public function max(int $max)
    {
        return $this->withMeta(['max' => $max]);
    }

    public function min(int $min)
    {
        return $this->withMeta(['min' => $min]);
    }

    public function stroke(string $stroke)
    {
        return $this->withMeta(['stroke' => $stroke]);
    }

    public function strokeWidth(int $strokeWidth)
    {
        return $this->withMeta(['strokeWidth' => $strokeWidth]);
    }

    public function padding(float $padding)
    {
        return $this->withMeta(['padding' => $padding]);
    }

    public function width(int $width)
    {
        return $this->withMeta(['width' => $width]);
    }
}
