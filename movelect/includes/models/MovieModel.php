<?php

class MovieModel
{
    public static function getMovieById($id)
    {
        $db = new Database();
        $sql = "SELECT * FROM movie WHERE id=" . intval($id);

        $result = $db->query($sql);

        if ($db->numRows($result) > 0) {
            return $db->fetchObject($result);
        }

        return null;
    }

    public static function getMoviesByUserId($userId)
    {
        $db = new Database();

        $sql = "SELECT * FROM movie WHERE userId=" . intval($userId);
        $result = $db->query($sql);

        if ($db->numRows($result) > 0) {
            $moviesArray = array();

            while ($row = $db->fetchObject($result)) {
                $moviesArray[] = $row;
            }

            return $moviesArray;
        }

        return null;
    }

    public static function createNewMovie($data)
    {
        $db = new Database();

        $sql = "INSERT INTO movie(userId,movie_name,director,year,imdb_id,image_path)
        VALUES('" . $db->escapeString($data['userId']) . "','" . $db->escapeString($data['movie_name']) . "',
        '" . $db->escapeString($data['director']) . "','" . $db->escapeString($data['year']) . "',
        '" . $db->escapeString($data['imdb_id']) . "','" . $db->escapeString($data['image_path']) . "')";
        $db->query($sql);

        $data['id'] = $db->insertId();

        return (object)$data;
    }

    public static function saveMovie($data)
    {
        $db = new Database();

        $sql = "UPDATE movie SET movie_name='" . $db->escapeString($data['movie_name']) . "',director='" . $db->escapeString($data['director']) . "',YEAR='" . $db->escapeString($data['year']) . "',imdb_id='" . $db->escapeString($data['imdb_id']) . "',image_path='" . $db->escapeString($data['image_path']) . "' WHERE id=" . intval($data['id']);
        $db->query($sql);

        return (object)$data;
    }

    public static function deleteMovie($id)
    {
        $db = new Database();

        $sql = "DELETE FROM movie WHERE id=" . intval($id);
        $db->query($sql);
    }
}