<?php
return function($kirby, $pages, $page) {


  $alerts = null;
  $data = array();

  if($kirby->request()->is('POST') && get('submit')) {



      // check the honeypot
      if(empty(get('inpMail')) === false) {
          go($page->url());
          exit;
      }

      $data = [
          'name'  => get('name'),
          'phone' => get('phone'),
          'dse'  => get('dse')
      ];

      $rules = [
          'name'  => ['required'],
          'phone'  => ['required'],
          'dse'   => ['required'],
      ];

      $messages = [
          'name'  => 'Name fehlt',
          'phone'  => 'Telefon fehlt',
          'dse'   => 'Dse fehlt'
      ];

      // some of the data is invalid
      if($invalid = invalid($data, $rules, $messages)) {
          $alerts = $invalid;

      // the data is fine, let's send the email
      } else {

        try {
            $kirby->email([
                'template' => 'email-broadcast',
                'from'     => option('mail.from'),
                'to'       => option('mail.to'),
                'subject'  => 'Neue Anmeldung für den WhatsApp Broadcast',
                'data'     => [
                    'sender' => esc($data['name']),
                    'phone'   => esc($data['phone']),
                    'url'   => $page->url(),
                ]
            ]);

        } catch (Exception $error) {
            if(option('debug')):
                $alerts['error'] = 'The form could not be sent: <strong>' . $error->getMessage() . '</strong>';
            else:
                $alerts['error'] = 'The form could not be sent!';
            endif;
        }

        //no exception occurred, let's send a success message
        if (empty($alerts) === true) {
            $success = true;
            $data = [];
        }
      }
  }

  return [
      'alerts'   => $alerts,
      'data'    => $data ?? false,
      'success' => $success ?? false
  ];
};
