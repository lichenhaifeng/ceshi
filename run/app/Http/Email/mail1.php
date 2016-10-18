<?php

namespace App\Http\Email;

class mail1 {

    /**
    * 这些即可发送email
    */
    public $host;
    public $port;
    public $user;
    public $password;
    public $mail_form;
    public $rcpt;

    public $body;

    /**
    * 附属在 header 中信息
    */
    public $to_name;
    public $from_name;
    public $subject;
    public $html;
 
    public $connection;

    public $msg = array();


    // 进行参数初始化
    public function __construct($conf, $rcpt, $header, $body, $html = true) {

        try {

            $this->host = $conf['host'];
            $this->port = $conf['port'];
            $this->user = $conf['user'];
            $this->password = $conf['password'];

            $this->rcpt = $rcpt;

            $this->to_name   = $header['to_name'];
            $this->from_name = $header['from_name'];
            $this->subject   = $header['subject'];
            $this->html      = $html;

            $this->body = base64_encode($body);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());            
        }

    }



    public function connect() {
        $this->connection = @fsockopen($this->host, '25', $errno, $errstr, 10);
        if (!$this->connection) {            
            throw new Exception('connect failed!');
        }
        $greet = $this->callback_code();
        
    }

    public function helo() {
        if($this->is_connect() &&
            $this->send_data('HELO ' . $this->host) &&
            $this->callback_code() == 250
            ) {
             return true;
        } else {
            throw new Exception($this->get_callback_msg_lastest());
            
        }
    }

    public function send_data($cmd) {
        if (is_resource($this->connection)) {
            return @fwrite($this->connection, $cmd."\r\n", strlen($cmd) + 2);
        }
    }

    public function auth(){
        if ($this->is_connect() &&
            $this->send_data('AUTH LOGIN') && $this->callback_code() == 334 &&
            $this->send_data(base64_encode($this->user)) && $this->callback_code() == 334 &&
            $this->send_data(base64_encode($this->password)) && $this->callback_code() == 235 ) {    
            return true;
        } else {
            throw new Exception($this->get_callback_msg_lastest());            
        }
    }

   public function Mail() {
        
        if ($this->is_connect() &&
            $this->send_data("MAIL FROM:<$this->user>") &&
            $this->callback_code() == 250
            ) {
            return true;
        } else  {
           throw new Exception($this->get_callback_msg_lastest());            
        }
   }

    public function is_connect() {
        return is_resource($this->connection);
    }

    public function callback_code() {
        if ($this->is_connect()) {
            $msg = fgets($this->connection);
            if (!empty($msg)) {
                $code = substr($msg, 0, strpos($msg, ' '));
            } else {
                return '';
            }
            $this->msg[] = $msg;
            return $code;
        }
    }

    public function get_callback_msg_lastest() {
        return end($this->msg);
    }

    public function rcpt($rcpt) {
        if ($this->is_connect() &&
            $this->send_data("RCPT TO:<$rcpt>") &&
            $this->callback_code() == 250
            ) {
            return true;
        } else  {
            throw new Exception($this->get_callback_msg_lastest());            
        }
    }

    public function data() {
        if ($this->is_connect() &&
            $this->send_data('DATA') &&
            $this->callback_code() == 354) {
            return true;
        } else {
            throw new Exception($this->get_callback_msg_lastest());
        }
    }


    public function send_mail() {

        try {
            
            $this->connect();
            $this->helo();
            $this->auth();
            $this->Mail();

            if (is_array($this->rcpt)) {
                foreach ($this->rcpt as $rcpt) {
                    $this->rcpt($rcpt);
                }

            } else {
                $this->rcpt($this->rcpt);
            }

            $this->data();

            $header = str_replace("\r\n" . '.', "\r\n" . '..', trim(implode("\r\n", $this->get_header())));
            $body   = str_replace("\r\n" . '.', "\r\n" . '..', $this->body);
            $body   = substr($body, 0, 1) == '.' ? '.' . $body : $body;

            $this->send_data($header);
            $this->send_data('');
            $this->send_data($body);            
            $this->send_data('.');

            if ($this->callback_code()  != 250) {
                throw new Exception('send mail falied!');                
            }
            return true;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());            
        }


    }



    //只能检测同一邮件服务器上email address
    public  function is_email_exist() {




    }


    public function get_header() {

        $header = array();
        $content_type = $this->html ? 'text/html;' : 'text/plain;' ;

        $headers [] = 'Date: ' . gmdate('D, j M Y H:i:s') . ' +0000';
        $to_mail = is_array($this->rcpt) ? implode(',', $this->rcpt) : $this->rcpt;
        $headers [] = 'To: "' . '=? utf8?B?' . base64_encode($this->to_name) . '?=' . '" <' . $to_mail . '>';
        $headers [] = 'From: "' . '=?utf8?B?' . base64_encode($this->from_name) . '?=' . '" <' . $this->user . '>';
        $headers [] = 'Subject: ' . '=?utf8?B?' . base64_encode($this->subject) . '?=';
        $headers [] = 'Content-Type:'.$content_type . ' charset=utf8; format=flowed';
        $headers [] = 'Content-Transfer-Encoding: base64';
        $headers [] = 'Content-Disposition: inline';

        return $headers;
    }



}


/**
* 用函数封装类
*/
function send_mail($conf, $rcpt, $header, $body) {
    
    $mail = new mail($conf, $rcpt, $header, $body);

    if ($mail->send_mail()) {
        echo 'send email successfully!';
    } else {
        echo 'falied!';
    }


}


