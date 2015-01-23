<?
function get_latest_tentacle_version(){
    return json_decode(file_get_contents('http://api.tentaclecms.com/get/core/'));
}

function release_version () { return 'v0.9.7'; }

function latest_tentacle_link(){
    $data = get_latest_tentacle_version();

    return $data;
}

// We need a unique ID for the host so hash it to keep it private and send it over
function universal_ui( $id = null ){

    if($_SERVER['HTTP_HOST'] == "localhost")
    {
        $id = $_SERVER['HTTP_HOST'].time();
    }
    else
    {
        $id = $_SERVER['HTTP_HOST'];
    }

    if(function_exists('sha1'))
    {
        $hash_id = sha1($id);
    }
    else
    {
        $hash_id = md5($id);
    }

    echo $hash_id;
}
