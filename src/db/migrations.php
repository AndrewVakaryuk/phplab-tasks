<?php

/**
 * TODO
 *  Write DPO statements to create following tables:
 *
 *  # airports
 *   - id (unsigned int, autoincrement)
 *   - name (varchar)
 *   - code (varchar)
 *   - city_id (relation to the cities table)
 *   - state_id (relation to the states table)
 *   - address (varchar)
 *   - timezone (varchar)
 *
 *  # cities
 *   - id (unsigned int, autoincrement)
 *   - name (varchar)
 *
 *  # states
 *   - id (unsigned int, autoincrement)
 *   - name (varchar)
 */

/** @var PDO $pdo */
require_once './pdo_ini.php';

// cities
$sql = <<<'SQL'
DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`)
);
SQL;
$pdo->exec($sql);

//states
$sql = <<<'SQL'
DROP TABLE IF EXISTS `states`;
CREATE TABLE `states` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`)
);
SQL;
$pdo->exec($sql);

//airports
$sql = <<<'SQL'
DROP TABLE IF EXISTS `airports`;
CREATE TABLE `airports` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`code` VARCHAR(3) NOT NULL COLLATE 'utf8_general_ci',
	`address` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
	`timezone` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
    `city_id` INT(10) UNSIGNED NOT NULL,
    `state_id` INT(10) UNSIGNED NOT NULL,
	PRIMARY KEY (`id`),
    FOREIGN KEY (`city_id`) REFERENCES cities(id),
    FOREIGN KEY (`state_id`) REFERENCES states(id)
);
SQL;
$pdo->exec($sql);
