<?php

namespace Tnhnclskn\DebugWhitelist;

class DebugWhitelist
{
    private array $ipAddresses = [];

    public function addIpAddresses(array $ipAddresses): void
    {
        $this->ipAddresses = array_merge($this->ipAddresses, $ipAddresses);
    }

    public function addIpAddress(string $ipAddress): void
    {
        if (!in_array($ipAddress, $this->ipAddresses)) {
            $this->ipAddresses[] = $ipAddress;
        }
    }

    public function isWhitelisted()
    {
        return in_array(request()->ip(), $this->ipAddresses);
    }
}
