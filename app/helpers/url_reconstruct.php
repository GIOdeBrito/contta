<?php

function url_reconstruct ($urlstr)
{
	$parts = parse_url($urlstr);

	$url = $parts['scheme'].'://';
	$url .= $parts['host'];

	if(isset($parts['port']))
	{
		$url .= ":".strval($parts['port']);
	}

	$url .= $parts['path'];

	if(isset($parts['query']))
	{
		parse_str($parts['query'], $queryout);

		if(isset($queryout['p']))
		{
			$url .= "?p=".$queryout['p'];
		}
	}

	return $url;
}

?>