<?php
class GoogleAuth
{
	protected $client;

	public function __contruct(Google_Client $googleClient = null)

	{
		$this->client = $googleClient;

		if($this->client)
		{
			$this->client->setClientId('484495651786-f4sehbvs7di261vdb9lc5faf1ttef4ul.apps.googleusercontent.com');
			$this->client->setClientSecret('aYejOT8pVfpw11MKVQ4JSRUS');
			$this->client->setClientRedirectUri('http://cit480.nerdheroes.com/test-index.php');
			$this->client->setScopes('email');

		}
	}
	public function isLoggedIn()
	{
		return isset($_SESSION['access_token']);
	}

	public function getAuthUrl()
	{
		return $this->client->createAuthUrl();
	}

	public function checkRedirectCode()
	{
		if(isset($_GET['code']))
		{
			$this->client->authenticate($_GET['code']);
			return true;
		}
		return false;
	}
}