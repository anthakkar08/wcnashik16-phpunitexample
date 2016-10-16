<?php
/**
 * function to check weather the Person is Organizer or not for 
 * WordCamp Nashik 16 
 * 
 * @note This function is just developed for demonstartion purpose during the Talk at WCNashik 16
 * @param string $email
 * @return bool
 */
function is_organizer($email){
    
    /**
     * 
     * this is just for demo purpose you can surly have Lazy loading along
     * with DB driven list of Organizer as per the Standard Practice.
     * 
     * this list may be incomplete as i don't have emails of All Organizer so 
     */
    $organizer_emails = array(
        'harshadmane@gmail.com',
        'tejaswini@webfanzine.com',
        'dingorechinmay@gmail.com',
        'nashik@wordcamp.org'
    );
    
    return in_array($email, $organizer_emails);
    
}
