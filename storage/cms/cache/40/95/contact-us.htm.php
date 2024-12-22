<?php 
class Cms61a0e49f6f892141293921_1169527525Class extends \Cms\Classes\PageCode
{
public function onContactUs()
{
    $validator = Validator:: make(
        [
            'name' => post('name'),
            'email' => post('email'),
            'phone_number' => post('phone'),
            'message' => post('message'),
        ],
        [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'numeric',
            'message' => 'required',
        ]);
    
    if ($validator->fails()) 
        {
           #return Redirect::to('/user/register')->withErrors($validator);
           $text = null;
           $messages = $validator->messages();
           #Flash::error($messages->first('referral'));
           foreach ($messages->all('<p>:message</p>') as $message) {https://www.wealth-on.com/
               $text .= $message;
           }
           Flash::error($text);
           return;
       }
       else
       {
            $vars = [
                'name' => post('name'),
                'email' => post('email'),
                'phone' => post('phone'),
                'text' => post('message'),
                ];
                
            
            
            Mail::send('glovtex.contact::mail.feedback', $vars, function($message)
            {
                $message->to('info@glovtex.com');
            });
            
            Flash::success('Thank you for contacting us. We will be in touch with you very soon.');
                
            
        }
}
}
