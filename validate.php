<?php

function validName($name)
{
    return !empty($name);
}

function validGenre($genre)
{
    $validGenres = array('country', 'jazz', 'pop', 'rap', 'rock');

    if($genre == null){
        return false;
    }

    foreach ($genre as $results) {
        if (!in_array($results, $validGenres)) {
            return false;
        }
        return true;
    }
}