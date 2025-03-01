# libCooldown
Simple cooldown library for plugins
# Example how to use
```php
$players = [];

$players['ReacherUrMom'] = $cooldown = new Cooldown();

// create a new cooldown
$cooldown->create(
    id: 'test'
    time: 10
);

// check a cooldown
/** @var float $remainingCooldown */
$remainingCooldown = $cooldown->get(
    id: 'test'
);

if ($remainingCooldown > 0) {
    // cooldown not finished
} else {
    // cooldown finished
}

// remove a cooldown
/** @var bool $result */
$result = $cooldown->remove(
    id: 'test'
);

if ($result) {
    // cooldown removed
} else {
    // cooldown not exists or already finished
}

// remove all cooldowns
$cooldown->clean();
```

# Contact
You can contact me on discord: reacherurmom
