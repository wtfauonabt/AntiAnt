<?php
/*******************************************************************************
 * Email Model
 * -------------------------------
 * Class used to handle email sending
 *
 *******************************************************************************/
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailModel extends CI_Model
{
	private $from;
	private $sendTo;
	private $subject;
	private $fields;

	public function __construct(){
		parent::__construct();
		// Define Variables for email sending
		$this->from = "Contact Form <do-not-reply@aa-experesshk.com>";
		$this->sendTo = "Contact Form <admin@aa-experesshk.com>";
		$this->subject = "New message from website contact form";
		$this->fields["name"] = "Name";
		$this->fields["phone"] = "Phone";
		$this->fields["email"] = "Email";
		$this->fields["message"] = "Message";
	}

	public function getFields(){
		return $this->fields;
	}

	public function sendEmail($data){
		try{
			if(!$data){
				throw new Exception ('Form is Empty');
			}
			$emailText = "You have a new message from the website contact form\n=============================\n";

			foreach($this->fields as $key=>$value){
				if($data[$key]){
					$emailText .= "{$value}: {$data[$key]}\n";
				}
			}

			// All the neccessary headers for the email.
			$headers = array('Content-Type: text/plain; charset="UTF-8";',
				'From: ' . $this->from,
				'Reply-To: ' . $this->from,
				'Return-Path: ' . $this->from,
			);

			// Send email
			mail($this->sendTo, $this->subject, $emailText, implode("\n", $headers));

			return true;
		}catch(Exception $e){
			return $e;
		}
	}
}
