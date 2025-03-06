<?php

namespace Adminer;

class Server
{
	/** @var array */
	private $params;

	public function __construct(array $params)
	{
		$this->params = $params;
	}

	public function getKey(): string
	{
		return substr(md5($this->getDriver() . $this->getServer()), 0, 8);
	}

	public function getDriver(): string
	{
		return $this->params["driver"];
	}

	public function getServer(): string
	{
		return $this->params["server"] ?? "";
	}

	public function getDatabase(): string
	{
		return $this->params["database"] ?? "";
	}

	public function getName(): string
	{
		return $this->params["name"] ?? $this->params["server"] ?? "";
	}

	public function getConfigParams(): array
	{
		$params = $this->params["config"] ?? [];

		if (isset($params["servers"])) {
			unset($params["servers"]);
		}

		return $params;
	}
}
