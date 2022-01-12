<?php 
 namespace App\Services;
 use \MailchimpMarketing\ApiClient;

 //Services for Mailchimp Newsletter su 

 class Newsletter{
     public function subscribe(string $email, string $list=null){
         //Nul save assignment operator which assigns this to the list if it is null
         $list ??=config('services.mailchimp.lists.subscribers');   
         
         return $this->client()->lists->addListMember($list,[
            'email_address'=>$email,
            'status'=>'subscribed'    
        ]);


     }
     protected function client(){
        $mailchimp = new ApiClient();

        ///Get and return api and list id from env file
        return $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us20'
        ]);

     }


 }
