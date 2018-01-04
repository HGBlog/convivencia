<?php

use Faker\Factory as Faker;
use App\Models\etapas;
use App\Repositories\etapasRepository;

trait MakeetapasTrait
{
    /**
     * Create fake instance of etapas and save it in database
     *
     * @param array $etapasFields
     * @return etapas
     */
    public function makeetapas($etapasFields = [])
    {
        /** @var etapasRepository $etapasRepo */
        $etapasRepo = App::make(etapasRepository::class);
        $theme = $this->fakeetapasData($etapasFields);
        return $etapasRepo->create($theme);
    }

    /**
     * Get fake instance of etapas
     *
     * @param array $etapasFields
     * @return etapas
     */
    public function fakeetapas($etapasFields = [])
    {
        return new etapas($this->fakeetapasData($etapasFields));
    }

    /**
     * Get fake data of etapas
     *
     * @param array $postFields
     * @return array
     */
    public function fakeetapasData($etapasFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'no_etapa' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $etapasFields);
    }
}
