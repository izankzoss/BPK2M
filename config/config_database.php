<?php

function __database($host = "localhost", $user = "root", $pass = "", $db = "baru")
{
    $sambung = new mysqli($host, $user, $pass, $db);
    if (!$sambung) {
        echo "sambung gagal" . $sambung->error;
    }
    return $sambung;
}
//mengambil fields database
function __get_fields($sambung, $table)
{
    $get_fields = $sambung->query("SELECT * FROM $table");
    if ($get_fields) {
        $fields = array();
        while ($rfields = $get_fields->fetch_fields()) {
            $fields[] = $rfields->name;
        }
        return $fields;
    } else {
        return "gagal mebambil fields" . $sambung->error;
    }
}

//fungsi simpan buatan
function __simpan($sambung, $table, $data)
{
    if (!is_array($data)) {
        return "error format tidak valid";
    }
    //proses pembuatan query
    $query = "INSERT INTO $table (";
    foreach ($data as $key => $value) {
        $query .= $key;
        if ($key != array_key_last($data)) {
            $query .= ",";
        }
    }
    $query .= ") VALUES (";
    foreach ($data as $k => $v) {
        $query .= "'" . $v . "'";
        if ($k != array_key_last($data)) {
            $query .= ",";
        }
    }
    $query .= ")";
    //end query pembuatan
    //start query
    $data = $sambung->query($query);

    if (!$data) {
        return false;
    } else {
        return true;
    }
}

function __ambil($sambung, $table, $fields = null, $where = null, $join = null, $orderby = null)
{
    $query = "SELECT";
    if ($fields == null) {
        $query .= "*";
    } else {
        $query .= $fields;
    }
    $query .= "FROM $table";
    if ($join != null) {
        if (is_array($join)) {
            foreach ($join as $j) {
                $query .= " " . $j;
            }
        }
    }
    if ($orderby != null) {
        $query .= "ORDER BY" . $orderby;
    }
    //return query
    $data = $sambung->query($query);

    if (!$data) {
        return false;
    } else {
        return $data;
    }
}

//delete section
function __delete($sambung, $table, $where)
{
    $query = " DELETE FROM $table ";
    if (is_array($where)) {
        $query .= " WHERE ";
        foreach ($where as $k => $w) {
            $query .= $k . " = '" . $w . "'";
            if ($k != array_key_last($where)) {
                $query .= " AND ";
            }
        }
    } else {
        return false;
    }

    $data = $sambung->query($query);
    if (!$data) {
        return false;
        exit;
    } else {
        return true;
    }
}

//update prodi

function __update($sambung, $table, $data, $where = null)
{
    $query = " UPDATE $table SET ";
    if (!is_array($data)) {
        return "format tak valid";
    } else {
        foreach ($data as $k => $v) {
            $query .= $k . " = '" . $v . "'";
            if ($k != array_key_last($data)) {
                $query .= ", ";
            }
        }
    }
    if ($where != null) {
        if (is_array($where)) {
            $query .= " WHERE ";
            foreach ($where as $k => $w) {
                $query .= $k . " = '" . $w . "'";
                if ($k != array_key_last($where)) {
                    $query .= " AND ";
                }
            }
        } else {
            return false;
        }
    }
    $data = $sambung->query($query);

    if (!$data) {
        return false;
    } else {
        return true;
    }
}
