<?php

declare(strict_types=1);

namespace reacherusermom\cooldown;

final class Cooldown {

	/** @var array<string, float> */
	private array $cooldowns = [];

	public function all(): array {
		return $this->cooldowns;
	}

	public function get(string $id) : float {
		return $this->cooldowns[$id] ?? 0.00;
	}

	public function create(string $id, int|float $time) : void {
		$this->cooldowns[$id] = microtime(true) + $time;
	}

	public function remove(string $id) : bool {
		if (!isset($this->cooldowns[$id]) || $this->cooldowns[$id] < microtime(true)) {
			return false;
		}
		unset($this->cooldowns[$id]);
		return true;
	}

	public function clean() : void {
		$this->cooldowns = [];
	}
}