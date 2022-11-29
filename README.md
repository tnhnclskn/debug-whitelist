# Debug Whitelist for Laravel

This package provides a simple way to whitelist IP addresses for production debugging in Laravel.

## Installation

Require this package with composer:

```bash
composer require tnhnclskn/debug-whitelist
```

## Usage

Add the following to your `.env` file:

```bash
DEBUG_WHITELIST_ENABLED=true
DEBUG_WHITELIST_IP_ADDRESSES=127.0.0.1,192.168.1.1,::1
```
