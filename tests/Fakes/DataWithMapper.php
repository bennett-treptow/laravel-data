<?php

namespace Spatie\LaravelData\Tests\Fakes;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapFrom;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Mappers\SnakeToCamelCaseMapper;

#[MapFrom(SnakeToCamelCaseMapper::class)]
class DataWithMapper extends Data
{
    public string $casedProperty;

    public SimpleData $dataCasedProperty;

    #[DataCollectionOf(SimpleData::class)]
    public DataCollection $dataCollectionCasedProperty;
}