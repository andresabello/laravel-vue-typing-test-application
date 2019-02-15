<?php
/**
 * Created by PhpStorm.
 * User: andresabello
 * Date: 2019-02-15
 * Time: 00:21
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class TypingTest extends Model
{
    protected $fillable = [
        'words_per_minute',
        'accuracy',
        'total_words',
        'correct_words',
        'incorrect_words',
        'characters_typed',
    ];
}