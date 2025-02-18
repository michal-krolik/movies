<?php

namespace App\Models;

use App\MovieGenre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Film
 *
 * @property string $title Nazwa
 * @property MovieGenre $genre Gatunek
 * @property int $likes Liczba polubień
 * @property float $rating Średnia ocena w skali 1-5
 */
class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'genre', 'likes', 'rating'];

    protected function casts(): array
    {
        return [
            'genre' => MovieGenre::class,
        ];
    }

    /**
     * Zwraca 3 losowe filmy
     *
     * @param Builder $query Zapytanie
     * @return Builder
     */
    public static function algorithmNo1(Builder $query): Builder
    {
        return $query->inRandomOrder()->limit(3);
    }

    /**
     * Zwraca filmy na literę "W", których tytuł ma parzystą liczbę znaków
     *
     * @param Builder $query Zapytanie
     * @return Builder
     */
    public static function algorithmNo2(Builder $query): Builder
    {
        return $query->whereLike('title', 'w%')->whereRaw('LENGTH(title) % 2 = 0');
    }

    /**
     * Zwraca filmy, których tytuł składa się z więcej niż jednego słowa
     *
     * @param Builder $query Zapytanie
     * @return Builder
     */
    public static function algorithmNo3(Builder $query): Builder
    {
        return $query->whereLike('title', '% %');
    }
}
