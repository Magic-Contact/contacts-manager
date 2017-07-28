<?php

// function displayContacts($filename)
// {
//     $contacts = array();

//     $handle = fopen($filename, 'r');
//     $contents = fread($handle, filesize($filename));
//     $contents = trim($contents);

//     $contentsArray = explode(PHP_EOL, $contents);
//     foreach($contentsArray as $contact){
//         $contact = explode("|", $contact);
//         $contactArray = [];
//         $contactArray["name"] = $contact[0];

//         $areaCode = substr($contact[1], 0, 3);
//         $prefix = substr($contact[1], 3, 3);
//         $number = substr($contact[1], 6, 4);

//         $contactArray["number"] = $areaCode . "-" . $prefix . "-" .  $number;

//         array_push($contacts, $contactArray);
//     }
//     fclose($handle);
//     return $contacts;
// }

// $contacts = parseContacts("contacts.txt");

function parseContacts($filename) 
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contents = trim($contents);

    $contentsArray = explode(PHP_EOL, $contents);
    foreach($contentsArray as $contact){
        $contact = explode("|", $contact);
        $contactArray = [];
        $contactArray["name"] = $contact[0];
        $contactArray["number"] = $contact[1];

        array_push($contacts, $contactArray);
    }
    return $contacts; 
}


// Menu option variable = 1, 2, 3, 4, 5
    //program runs until variable = 5


//function showMenu() --->
    //make the function write to the command line

function showMenu ()
{
    $menuArray = ["1 View Contacts", "2 Add New Contact", "3 Search by Contact Name", "4 Delete Existing Contact", "5 Exit"];
    foreach($menuArray as $data)
    {   
        echo $data . PHP_EOL;
    }
    menuSelection();

}

function menuSelection()
{
    $userSelection = "";
    fwrite(STDOUT, PHP_EOL . "Selection: ");
    $userSelection = trim(fgets(STDIN));

    switch ($userSelection)
    {
        case ("1"):
            echo showContacts(parseContacts('contacts.txt')) . PHP_EOL;
            echo showMenu();
            break;
        case ("2"):
            echo addContact() . PHP_EOL;
            echo showMenu();
            break;
        case ("3"):
            return searchContacts(parseContacts('contacts.txt'));
            break;
        case ("4"):
            return deleteContacts(parseContacts('contacts.txt'));
            break;
        case ("5"):
            echo "GOODBYE!" . PHP_EOL;
    }
}

showMenu();
// showContacts(parseContacts('contacts.txt'));

function showContacts($contactsArray){
    $contacts = $contactsArray;

    echo "Name   |    Number" . PHP_EOL . "---------------------" . PHP_EOL;

    foreach ($contacts as $contact)
    {
        $areaCode = substr($contact['number'], 0, 3);
        $prefix = substr($contact['number'], 3, 3);
        $number = substr($contact['number'], 6, 4);

        $contact["number"] = $areaCode . "-" . $prefix . "-" .  $number;

        echo $contact['name'] . " | " . $contact['number'] . PHP_EOL;
    }
}

// showContacts($contactsArray);
// add contact ---->
    // push new contact to array
// no key
function addContact() {
    // $newContact = [];
    fwrite(STDOUT, "Please Enter Contact Name: " );
    $name = trim(fgets(STDIN));

    fwrite(STDOUT, "Please Enter Contact Number: " );
    $number = trim(fgets(STDIN));

    // $newContact['name'] = $name;
    // $newContact['number'] = $number;

    // array_push($contactsArray,$newContact);

    // $contactString = "";
    // foreach($contactsArray as $contact){
    $contactString .= $name . '|' . $number . PHP_EOL;
    // }
    // echo $contactString;
    $handle = fopen('contacts.txt', "a");
    fwrite($handle, $contactString);
    fclose($handle);
    clearstatcache();
    showContacts(parseContacts('contacts.txt'));

}

function searchContacts($contactArray)
{   
    $contacts = $contactArray;

    fwrite(STDOUT, "Who do you want to find?: ");
    $searchString = trim(fgets(STDIN));

    $result=[]; 
    foreach($contacts as $contact)
    {
        if (strstr($contact['name'], $searchString))
        {
            array_push($result, $contact);
        }
    } 
    return showContacts($result);
}   


    // if ($result == false){
    //     echo "SORRY";
    // }
//     echo $result;
// }
    // check that user input is correct (name, phone number)

//search contact ----->
    // ask for user input and search for matches in array

    // display result

// delete an existing contact
    // use search by contact to find contact to delete

    // remove item from array


// DO FIRST*****


// exit ---------->

// function exitContactsManager ()
// {

// }

    // this is a do-while loop

    // write contact array to contacts file

    //exit program

