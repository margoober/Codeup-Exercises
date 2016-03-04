<?php

function parseContacts($filename)
{
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    $contacts = explode("\n", $contents);
    foreach ($contacts as $key => $contact) {
    	explode("|", $key);
    }
    return $contacts;

}

var_dump(parseContacts('contacts.txt'));
