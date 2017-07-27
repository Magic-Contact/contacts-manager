<?php

//funtion to import contacts ---->
    //fopen()
    
    //create array
        // user can access and change array while program is running

    // fclose()


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

    }

    //Print Menu
        // View contacts.
        // Add a new contact.
        // Search a contact by name.
        // Delete an existing contact.
        // Exit. Enter an option (1, 2, 3, 4 or 5)

    //User input

showMenu();
//show menu ----->
    // take in contacts array and output contacts according to format


// add contact ---->
    // push new contact to array

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

