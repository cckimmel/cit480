<?php
class GoogleAuth
{
	protected $client;

	public function __contruct(Google_Client $googleClient = null)

	{
		$this->client = $googleClient;

		if($this->client)
		{
			echo 'ok';
			$this->client->setClientId('484495651786-f4sehbvs7di261vdb9lc5faf1ttef4ul.apps.googleusercontent.com');
			$this->client->setClientSecret('aYejOT8pVfpw11MKVQ4JSRUS');
			$this->client->setClientRedirectUri('http://cit480.nerdheroes.com/index?page=homepage.php');
			$this->client->setScopes('email');

		}
	}
}