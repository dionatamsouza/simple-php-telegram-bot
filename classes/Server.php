<?php
class Server extends Bot
{
	public function __construct($conf, $chat_id)
	{
		parent::__construct($conf, $chat_id);
	}

	public function uptime()
	{
		return $this->send("Server uptime:". exec('uptime'));
	}

	public function uname()
	{
		return $this->send(exec('uname -a'));
	}

	public function who()
	{
		return $this->send("Current sessions on server:". chr(10) . exec('who'));
	}

}
