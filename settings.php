<?php 

class ContactInfo {
    const PHONE_NUMBER = "123-456-7890";
    const EMAIL = "email@example.com";
}

$contact_info = new ContactInfo();

echo $contact_info::PHONE_NUMBER; // Outputs: 123-456-7890
echo $contact_info::EMAIL; // Outputs: email@example.com
